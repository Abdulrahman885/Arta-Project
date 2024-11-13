<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    /**
     * Create a new class instance.
     */
    public function __construct(private CategoryRepository $CategoryRepository)
    {
        //
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Categories=$this->CategoryRepository->index();
        return ApiResponseClass::sendResponse($Categories, 'All Categories retrieved successfully.'); 
    }

    public function getParents()
    {
        $Parents=$this->CategoryRepository->getParents();
        return ApiResponseClass::sendResponse($Parents,'All Parents retrieved successfully.');
    }

    public function getChildren($id)
    {
        $Children=$this->CategoryRepository->getChildren($id);
        return ApiResponseClass::sendResponse($Children,'All Children retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
