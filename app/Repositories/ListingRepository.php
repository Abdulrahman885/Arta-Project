<?php

namespace App\Repositories;
use App\Interfaces\RepositoriesInterface;
use App\Models\listing;


class ListingRepository implements RepositoriesInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    
    public function index() : \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return listing::with(['user','category','region'])->filter()->paginate(10);
    }
    
    public function getById($id) : listing
    {
        return listing::findOrFail($id);
    }

    public function store(array $data) : listing
    {
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
