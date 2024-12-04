<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponseClass;
use Exception;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ComplaintRepository;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ComplaintController extends Controller
{
    /**
     * Create a new class instance.
    */
    public function __construct(private ComplaintRepository $ComplaintRepository)
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        try {
            $Complaint=$this->ComplaintRepository->index();
            return ApiResponseClass::sendResponse($Complaint, 'All Complaint retrieved successfully.');
        } catch (Exception $e) {
            return ApiResponseClass::sendError('Error retrieving Complaint: ' . $e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = validator::make($request->all(),[
                'user_id'=>['required',Rule::exists('users','id')],
                'listing_id'=>['required',Rule::exists('listings','id')],
                'content'=>['required','string'],
            ]);
            if ($validator->fails()){
                return ApiResponseClass::sendValidationError($validator->errors());
            }
            $Complaint=$this->ComplaintRepository->store($request->all());
            return ApiResponseClass::sendResponse($Complaint,'Complaint saved successfully.');
        } catch (Exception $e) {
            return ApiResponseClass::sendError('Error save Complaint: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        try {
            $Complaint=$this->ComplaintRepository->getById($id);
            return ApiResponseClass::sendResponse($Complaint, " data getted  successfully");
        }catch(Exception $e)
        {
            return ApiResponseClass::sendError('Error returned Complaint: ' . $e->getMessage());
        }

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
        try {
            $Complaint=$this->ComplaintRepository->getById($id);
            if($this->ComplaintRepository->delete($Complaint->id)){
                return ApiResponseClass::sendResponse($Complaint, "{$Complaint->id} unsaved successfully.");
            }
            return ApiResponseClass::sendError("Complaint with ID {$id} may not be found or not deleted. Try again.");
        } catch (Exception $e) {
            return ApiResponseClass::sendError('Error deleting Complaint: ' . $e->getMessage());
        }
    }
}
