<?php

namespace App\Http\Controllers\API;


use Exception;
use Illuminate\Http\Request;
use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Repositories\ListingRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class ListingController extends Controller
{
    /**
     * Create a new class instance.
    */
    public function __construct(private ListingRepository $ListingRepository)
    {
        //
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $listings=$this->ListingRepository->index($request->region_id,$request->category_id);
            return ApiResponseClass::sendResponse($listings, 'All Listings retrieved successfully.'); 
        } catch (Exception $e) {
            return ApiResponseClass::sendError('Error retrieving Listings: ' . $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = validator::make($request->all(),[
                'title'=>['required','string','max:255'],
                'user_id'=>['required',Rule::exists('users','id')],
                'description'=>['required','string'],
                'price'=>['required','numeric','min:0'],
                'category_id'=>['required',Rule::exists('categories','id')],
                'region_id'=>['required',Rule::exists('regions','id')],
                'status'=>['required','in:جديد,شبه جديد,مستعمل'],
                'primary_image'=>['required','image','max:2048']
            ]);
            if ($validator->fails()){
                return ApiResponseClass::sendValidationError($validator->errors());
            }
            $listing=$this->ListingRepository->store($request->all());
            return ApiResponseClass::sendResponse($listing,'listing saved successfully.');
        } catch (Exception $e) {
            return ApiResponseClass::sendError('Error save Listing: ' . $e->getMessage());
        }
        

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
