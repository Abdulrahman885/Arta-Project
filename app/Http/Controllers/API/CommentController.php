<?php

namespace App\Http\Controllers\API;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Repositories\CommentRepository;
use Laravel\Sanctum\PersonalAccessToken;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
     /**
     * Create a new class instance.
    */
    public function __construct(private CommentRepository $CommentRepository)
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $comments=$this->CommentRepository->index();
            return ApiResponseClass::sendResponse($comments,'All Comments retrieved successfully.');
        } catch (Exception $e) {
            return ApiResponseClass::sendError('Error retrieving Comments: ' . $e->getMessage());
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'content' => ['required','string'],
                'listing_id'=>['required',Rule::exists('listings','id')]
            ]);
            if ($validator->fails())
                return ApiResponseClass::sendValidationError($validator->errors()
            );
            $user=PersonalAccessToken::findToken($request->bearerToken())->tokenable;
            $request->merge(['user_id' => $user->id]);
            $comment=$this->CommentRepository->store($request->all());
            return ApiResponseClass::sendResponse($comment,'comment saved successfully.');
        } catch (Exception $e) {
            return ApiResponseClass::sendError('Error save comment: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $comment = $this->CommentRepository->getById($id);
            return ApiResponseClass::sendResponse($comment, " data getted  successfully");
        }catch(Exception $e)
        {
            return ApiResponseClass::sendError('Error returned Comment: ' . $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $comment=$this->CommentRepository->getById($id);
            if($this->CommentRepository->delete($comment->id)){
                return ApiResponseClass::sendResponse($comment, "{$comment->id} unsaved successfully.");
            }
            return ApiResponseClass::sendError("Comment with ID {$id} may not be found or not deleted. Try again.");
        } catch (Exception $e) {
            return ApiResponseClass::sendError('Error deleting comment: ' . $e->getMessage());
        }
    }
}
