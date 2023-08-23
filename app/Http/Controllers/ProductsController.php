<?php

namespace App\Http\Controllers;;

use App\Models\Category;
use App\Models\Image;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Products;
use App\Models\Supplier;
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
        $products = Products::all();
        return view('admin.products.index')->with('products', $products);
    }
    public function products(){
        return response()->json(Products::all());
    }
    public function products_show()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status',1)->get();
        $suppliers = Supplier::all();
        return view('admin.products.create',compact('categories','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        // dd($request);
        Products::create($request->all());
        return redirect()->route('product.index') ->with("success", "Product Created.");

        // $image = $request->file;
        // $image = time()+"."+$image->getClint;
        // $product = Products::create($request->all());
        // if ($product) {
        //     //    dd($request);
        //     if ($request->hasFile('images')) {
        //         $files = $request->file('images');
        //         foreach ($files as $file) {
        //             // Save or process each file as needed
        //             $loc = $file->store('uploads/products');
        //             $i = new Image();
        //             $i->name = $loc;
        //             $product->images()->save($i);
        //             //echo Storage::path($loc) . "<br>";
        //             //resize the images and store with same name. max resolution can be 1024px
        //             //watermark
        //             //image intervention
        //             $image = ImageI::make(Storage::path($loc))->resize(800, null, function ($constraint) {
        //                 $constraint->aspectRatio();
        //                 $constraint->upsize();
        //             })->insert(storage_path("app/public") . '/logo.png', 'center')->save(Storage::path($loc));
        //             //watermark end
        //         }
        //         return redirect()->route("product.create")->with("success", "Product saved successfully. ID is " . $product->id);
        //     } else {
        //         echo "image not available";
        //     }
        // } else {
        //     echo "add failed";
        // }
    }


    /**
     * Display the specified resource.
     */
    public function show(Products $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $product)
    {
        $product->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        // dd($request);
        $products->delete();
        return redirect()->route('product.index')->with('success', 'product deleted successfully');
    }
}
