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
        $inwarddetails = Inwarddetail::all();
        $inwards = Inward::all();
        return view('admin.inward.index')->with('inwarddetails', $inwarddetails);
    }
    public function create()
    {
        $suppliers = Supplier::where('status', 1)->get();
        $products = Product::all();

        return view('admin.inward.create', compact('suppliers', 'products'));
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
        $validatedData = $request->validate([
            'supplier_id' => 'required',
            'date_received' => 'required|date',
        ]);

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
        return redirect()->route('inward.index')->with('success', 'Inward successfully.');
    }

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
