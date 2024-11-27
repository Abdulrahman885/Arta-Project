<?php

namespace App\Repositories;
use App\Interfaces\RepositoriesInterface;
use App\Models\listing;
use App\Models\Region;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;


class ListingRepository implements RepositoriesInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    
    public function index($regionId = null, $categoryId = null)
    {
        $query = Listing::query();
        
        if ($regionId) {
            $region = Region::with('children')->find($regionId);
            if ($region) {
                $regionIds = $region->children()->pluck('id')->push($region->id);
                $query->whereIn('region_id', $regionIds);
            }
        }

        if ($categoryId) {
            $category = Category::with('children')->find($categoryId);
            if ($category) {
                $categoryIds = $category->children()->pluck('id')->push($category->id);
                $query->whereIn('category_id', $categoryIds);
            }
        }

        return $query->with(['user:id,name,username,email,contact_number,whatsapp_number','category:id,name','region:id,name','images:id,url','comments.user'])->filter()->paginate(10);
    }
    
    public function getById($id) : listing
    {
        return listing::findOrFail($id);
    }

    public function store(array $data) : listing
    {
        $extions=$data['primary_image']->getclientoriginalextension();
        $filename = uniqid('',true).'.'.$extions;
        $File_path = Storage::putFileAs('Primary_images',$data['primary_image'],$filename);
        $File_path ='storage/'.$File_path;
        $data['primary_image']=$File_path;
        return listing::create($data);
    }

    public function update(array $data,$id) : listing
    {
        $listing = $this->getById($id);
        $listing->update($data);
        return $listing;
    }

    public function delete($id) : bool
    {
        $listing = $this->getById($id);
        return $listing->delete() > 0;
    }
}
