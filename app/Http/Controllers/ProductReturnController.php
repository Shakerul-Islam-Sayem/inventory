<?php

namespace App\Http\Controllers;

use App\Models\ProductReturn;
use App\Http\Requests\StoreProductReturnRequest;
use App\Http\Requests\UpdateProductReturnRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use App\Http\Controllers\Str;
use App\Http\Controllers\Request;
use Illuminate\Support\Facades\Log;
use Requests;
use Stringable;

class ProductReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productreturns = productreturn::all();
        return view('admin.productreturn.index')->with('productreturns',$productreturns);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('admin.productreturn.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreProductReturnRequest $request)
    // {
    //     dd($request->all());
    //     $returndata = [
    //         'return_id' => $request->input("return_id"),
    //         'date_received' => $request->input('date_received'),
    //         'comment' => $request->input('comment'),

    //     ];
    //     $productreturn = ProductReturn::create($returndata);

    //     Log::info($productreturn->id);

    //     foreach ($request->input('product_id') as $index => $product_id) {
    //         $id = new ProductReturn();
    //         $id->return_id = $productreturn->id;
    //         $id->product_id = $product_id;
    //         $id->purchase_price = $request->input('purchase_price')[$index];
    //         $id->sale_price = $request->input('sale_price')[$index];
    //         $id->quantity = $request->input('quantity')[$index];

    //         $p = Product::find($product_id);
    //         $p->quantity = $p->quantity + $id->quantity;
    //         $p->save();

    //         $productreturn->productreturns()->save($id);
    //     }

    //     return redirect()->route('return.index')->with('success', 'Product Return Successfully.');
    // }

    public function store(StoreProductReturnRequest $request)
    {
        $returnData = [
            'date_received' => $request->input('date_received'),
            'comment' => $request->input('comment'),
        ];

        $product_ids = $request->input('product_id');
        $purchase_prices = $request->input('purchase_price');
        $sale_prices = $request->input('sale_price');
        $quantities = $request->input('quantity');

        foreach ($product_ids as $index => $product_id) {
            $returnData['product_id'] = $product_id;
            $returnData['purchase_price'] = $purchase_prices[$index];
            $returnData['sale_price'] = $sale_prices[$index];
            $returnData['quantity'] = $quantities[$index];

            ProductReturn::create($returnData);

            // $p = Product::find($product_id);
            // $p->quantity = $p->quantity + $returnData->quantity;
            // $p->save();
            $product = Product::find($product_id);
            $product->quantity += $quantities[$index];
            $product->save();
        }

        return redirect()->route('return.index')->with('success', 'Product Return Successfully.');
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
