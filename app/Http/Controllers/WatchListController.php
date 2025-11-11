<?php

namespace App\Http\Controllers;

use App\Models\WatchList;
use App\Http\Requests\StoreWatchListRequest;
use App\Http\Requests\UpdateWatchListRequest;

class WatchListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWatchListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WatchList $watchList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WatchList $watchList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWatchListRequest $request, WatchList $watchList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WatchList $watchList)
    {
        //
    }
}
