@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                
                <div class="card-header bg-white ps-0">
                    <h2>Supplier Information</h2>
                </div>
                <dl class="row">
                    <dt class="col-sm-3">Supplier Title</dt>
                    <dd class="col-sm-9">: {{ $supplier->supplier_title }}</dd>

                    <dt class="col-sm-3">Owner Name</dt>
                    <dd class="col-sm-9">: {{ $supplier->owner_name }}</dd>

                    <dt class="col-sm-3">Contact Person</dt>
                    <dd class="col-sm-9">: {{ $supplier->contact_person }}</dd>

                    <dt class="col-sm-3">Contact Email</dt>
                    <dd class="col-sm-9">: {{ $supplier->email }}</dd>

                    <dt class="col-sm-3">Contact Phone</dt>
                    <dd class="col-sm-9">: {{ $supplier->phone }}</dd>

                    <dt class="col-sm-3">Address</dt>
                    <dd class="col-sm-9">: {{ $supplier->address }}</dd>

                    <dt class="col-sm-3">Tax ID/VAT Number</dt>
                    <dd class="col-sm-9">: {{ $supplier->tax }}</dd>

                    <dt class="col-sm-3">BIN Number</dt>
                    <dd class="col-sm-9">: {{ $supplier->bin_number }}</dd>

                    <dt class="col-sm-3">Notes</dt>
                    <dd class="col-sm-9">: {{ $supplier->notes }}</dd>
                </dl>
                <a href="{{ route('supplier.index') }}" class="btn btn-primary">Back to List</a>
                <a href="{{ route('supplier.destroy',$supplier->id) }}" class="btn btn-danger">Delete</a>
            </div>
        </div>

    </div>
@endsection
