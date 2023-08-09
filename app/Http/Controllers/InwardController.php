<?php

namespace App\Http\Controllers;

use App\Models\Inward;
use App\Http\Requests\StoreInwardRequest;
use App\Http\Requests\UpdateInwardRequest;

class InwardController extends Controller
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
    public function store(StoreInwardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Inward $inward)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inward $inward)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInwardRequest $request, Inward $inward)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inward $inward)
    {
        //
    }
}
