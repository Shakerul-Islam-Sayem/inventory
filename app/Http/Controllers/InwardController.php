<?php

namespace App\Http\Controllers;

use App\Models\Inward;
use App\Http\Requests\StoreInwardRequest;
use App\Http\Requests\UpdateInwardRequest;
use App\Models\Category;
use App\Models\Inwarddetail;
use App\Models\Product;
use App\Models\Supplier;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Log;
use Requests;

// use GuzzleHttp\Psr7\Request;

class InwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $inward = Inward::all();
        // return view('admin.inward.index')->with('inward', $inward);

        // return view('index', ['students' => Students::all()]);
        return view('product');
    }


    // public function apiIndex()
    // {
    //     return response()->json(Products::all());
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::where('status', 1)->get();
        $products = Product::all();

        return view('admin.products.inward', compact('suppliers', 'products'));
    }

    public function store(StoreInwardRequest $request)
    {
        // dd($request->all());
        $inwardData = [
            'supplier_id' => $request->input('supplier_id'),
            'date_received' => $request->input('date_received'),
            'payment_method' => $request->input('payment_method'),
            'trxid' => $request->input('trxid'),
            'discount' => $request->input('discount'),
            'comment' => $request->input('comment'),
        ];

        $inward = Inward::create($inwardData);

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
        return redirect()->route('inward.create')->with('success', 'Inward successfully.');
    }
    // $data = $request->validate(
    //     [
    //         'supplier_id' => 'required',
    //         'date_received' => 'required',
    //         'invoice_number' => 'required',
    //     ]
    // );

    // foreach ($data['product_id'] as $index => $value) {
    //     Inward::create([
    //         'supplier_id' => $data['supplier_id'],
    //         'date_received' => $data['date_received'],
    //         'invoice_number' => $data['invoice_number'],
    //         'product_id' => $value,
    //         'purchase_price' => $data['purchase_price'][$index],
    //         'sale_price' => $data['sale_price'][$index],
    //         'quantity' => $data['quantity'][$index],
    //     ]);
    // }
    // return redirect()->route('admin.product.inward');

    // Validate the form data
    // $request->validate([
    //     'supplier_id' => 'required',
    //     'date' => 'required',
    //     'invoice_number' => 'required|unique:inwards', // Assuming 'invoice_number' is unique
    //     // Add validation rules for other fields
    // ]);

    // // Create a new inward entry
    // $inward = new Inward([
    //     'supplier_id' => $request->input('supplier_id'),
    //     'date' => $request->input('date'),
    //     'invoice_number' => $request->input('invoice_number'),
    //     // Map other fields here
    // ]);

    // $inward->save(); // Save the entry

    // Process and save product details using a loop
    //     foreach ($request->input('product_id') as $key => $product_id) {
    //         $inward->products()->attach($product_id, [
    //             'purchase_price' => $request->input('purchase_price')[$key],
    //             'sale_price' => $request->input('sale_price')[$key],
    //             'quantity' => $request->input('quantity')[$key],
    //         ]);
    //     }

    //     return redirect()->route('inward.create')->with('success', 'Inward entry created successfully.');
    // }

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
