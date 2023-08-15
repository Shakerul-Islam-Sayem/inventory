<?php

namespace App\Http\Controllers;

use App\Models\Outward;
use App\Http\Requests\StoreOutwardRequest;
use App\Http\Requests\UpdateOutwardRequest;

class OutwardController extends Controller
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
        return view('admin.products.inward');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOutwardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Outward $outward)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Outward $outward)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOutwardRequest $request, Outward $outward)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Outward $outward)
    {
        //
    }
}
