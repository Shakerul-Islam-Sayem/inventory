<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Products;
use Termwind\Components\Dd;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as ImageI;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.products.index');
    }
    public function products()
    {
    }
    public function products_show()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        $product = Products::create($request->all());
        if ($product) {
            //    dd($request);
            if ($request->hasFile('images')) {
                $files = $request->file('images');

                foreach ($files as $file) {
                    // Save or process each file as needed
                    $loc = $file->store('uploads/products');
                    $i = new Image();
                    $i->name = $loc;
                    $product->images()->save($i);
                    //echo Storage::path($loc) . "<br>";
                    //resize the images and store with same name. max resolution can be 1024px
                    //watermark
                    //image intervention
                    $image = ImageI::make(Storage::path($loc))->resize(800, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->insert(storage_path("app/public") . '/logo.png', 'center')->save(Storage::path($loc));
                    //watermark end
                }
                return redirect()->route("product.create")->with("success", "Product saved successfully. ID is " . $product->id);
            } else {
                echo "image not available";
            }
            // 
        } else {
            echo "add failed";
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
}
