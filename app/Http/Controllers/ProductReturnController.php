<?php

namespace App\Http\Controllers;

use App\Models\ProductReturn;
use App\Http\Requests\StoreProductReturnRequest;
use App\Http\Requests\UpdateProductReturnRequest;
use App\Models\Category;
use App\Models\Products;
use App\Models\Supplier;

class ProductReturnController extends Controller
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
        $categories = Category::where('status',1)->get();
        $suppliers = Supplier::all();
        $products = Products::all();
        return view('admin.products.return',compact('categories','suppliers','products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductReturnRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductReturn $productReturn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductReturn $productReturn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductReturnRequest $request, ProductReturn $productReturn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductReturn $productReturn)
    {
        //
    }
}
