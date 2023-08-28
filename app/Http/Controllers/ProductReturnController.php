<?php

namespace App\Http\Controllers;

use App\Models\ProductReturn;
use App\Http\Requests\StoreProductReturnRequest;
use App\Http\Requests\UpdateProductReturnRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Support\Facades\Log;

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
        $products = Product::all();
        return view('admin.productreturn.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductReturnRequest $request)
    {
        // dd($request->all());
        $returndata = [
            'supplier_id' => $request->input('supplier_id'),
            'date_received' => $request->input('date_received'),
            'payment_method' => $request->input('payment_method'),
            'trxid' => $request->input('trxid'),
            'discount' => $request->input('discount'),
            'comment' => $request->input('comment'),
        ];
        $validatedData = $request->validate([
            'supplier_id' => 'required',
            'date_received' => 'required|date',
        ]);

        $inward = ProductReturn::create($returndata);

        Log::info($inward->id);

        foreach ($request->input('product_id') as $index => $product_id) {
            $id = new Inwarddetail();
            $id->product_id = $product_id;
            $id->purchase_price = $request->input('purchase_price')[$index];
            $id->sale_price = $request->input('sale_price')[$index];
            $id->quantity = $request->input('quantity')[$index];
            $p = Product::find($product_id);
            $p->quantity = $p->quantity + $id->quantity;
            $p ->save();
            $inward->inwarddetails()->save($id);
        }
        // Inwarddetail::create($productData);
        return redirect()->route('inward.index')->with('success', 'Inward successfully.');
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
