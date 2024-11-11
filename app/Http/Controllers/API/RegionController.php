<?php

namespace App\Http\Controllers\API;

use App\Classes\ApiResponseClass;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use app\Repositories\RegionRepository;

class RegionController extends Controller
{
    /**
     * Create a new class instance.
     */
    public function __construct(private RegionRepository $RegionRepository)
    {
        //
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Regions=$this->RegionRepository->index();
        return ApiResponseClass::sendResponse($Regions, 'All Regions retrieved successfully.');
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
    public function update(Request $request,$id)
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
