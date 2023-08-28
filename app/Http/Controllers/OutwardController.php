<?php

namespace App\Http\Controllers;

use App\Models\Outward;
use App\Http\Requests\StoreOutwardRequest;
use App\Http\Requests\UpdateOutwardRequest;
use App\Models\Category;
use App\Models\Outwarddetail;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Support\Facades\Log;

class OutwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outwarddetails = Outwarddetail::all();
        $outwards = Outward::all();
        return view('admin.outward.index')->with('outwarddetails', $outwarddetails);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::where('status',1)->get();
        $products = Product::all();
        return view('admin.outward.create',compact('suppliers','products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOutwardRequest $request)
    {
        // dd($request->all());
        $outwardData = [
            'customer_name' => $request->input('customer_name'),
            'customer_phone' => $request->input('customer_phone'),
            'date_received' => $request->input('date_received'),
            'payment_method' => $request->input('payment_method'),
            'trxid' => $request->input('trxid'),
            'discount' => $request->input('discount'),
            'comment' => $request->input('comment'),
        ];

        $outward = Outward::create($outwardData);

        Log::info($outward->id);

        foreach ($request->input('product_id') as $index => $product_id) {
            $id = new Outwarddetail();
            $id->product_id = $product_id;
            $id->purchase_price = $request->input('purchase_price')[$index];
            $id->sale_price = $request->input('sale_price')[$index];
            $id->quantity = $request->input('quantity')[$index];
            $outward->outwarddetails()->save($id);
            $p = Product::find($product_id);
            $p->quantity = $p->quantity - $id->quantity;
            $p ->save();
            $outward->outwarddetails()->save($id);
        }
        // outwarddetail::create($productData);
        return redirect()->route('outward.index')->with('success', 'Outward Successfully.');
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
