<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admin.supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreSupplierRequest $request)
    public function store(Request $request)
    {
        // dd($request->all());s
        Supplier::create($request->all());
        return redirect()->route('supplier.index') ->with("success", "Supplier Created.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        return view('admin.supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        return view('admin.supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupplierRequest $request, Supplier $supplier)
    {
        $supplier->update($request->all());
        return redirect()->route('supplier.index')->with('success', 'Supplier updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        // dd($request);
        $supplier->delete();
        return redirect()->route('supplier.index')->with('success', 'supplier deleted successfully');
    }
}
