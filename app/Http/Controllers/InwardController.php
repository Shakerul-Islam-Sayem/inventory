<?php

namespace App\Http\Controllers;

use App\Models\Inward;
use App\Http\Requests\StoreInwardRequest;
use App\Http\Requests\UpdateInwardRequest;
use App\Models\Category;
use App\Models\Products;
use App\Models\Supplier;
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
        // return view('admin.products.inward');

        $categories = Category::where('status',1)->get();
        $suppliers = Supplier::all();
        $products = Products::all();

        return view('admin.products.inward',compact('categories','suppliers','products'));
    }
    // public function submit(Request $request){
    //     dd($request);
    // }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request){
    //     Inward::create($request->all());
    //     return redirect()->route('products.inward')->with("success", "Inward Created.");
    // }

    public function store(StoreInwardRequest $request)
    {
        $data = $request->validate([
            'supplier_id' => 'required',
            'date_received' => 'required',
            'invoice_number' => 'required',
        ]
    );

    foreach ($data['product_id'] as $index => $value) {
        Inward::create([
            'supplier_id' => $data['supplier_id'],
            'date_received' => $data['date_received'],
            'invoice_number' => $data['invoice_number'],
            'product_id' => $value,
            'purchase_price' => $data['purchase_price'][$index],
            'sale_price' => $data['sale_price'][$index],
            'quantity' => $data['quantity'][$index],
        ]);
    }
        return redirect()->route('admin.product.inward');

}
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
