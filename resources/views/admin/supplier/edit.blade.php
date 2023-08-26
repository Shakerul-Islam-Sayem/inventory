@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('supplier.update',$supplier->id) }}" method="post">
                    @csrf
                    @method('put')
                    <h2>Supllier Edit</h2>
                    {{-- <div class="mb-3">
                        <label for="supplierId" hidden class="form-label">Supplier ID</label>
                        <input type="text" hidden class="form-control" id="supplierId" name="supplierId">
                    </div> --}}
                    <div class="mb-3">
                        <label for="supplierName" class="form-label">Supplier Title</label>
                        <input type="text" value="{{ $supplier->supplier_title }}" class="form-control" id="supplierTitle"
                            name="supplier_title">
                    </div>
                    <div class="mb-3">
                        <label for="ownerName" class="form-label">Owner Name</label>
                        <input type="text" value="{{ $supplier->owner_name }}" class="form-control" id="ownerName" name="owner_name">
                    </div>
                    <div class="mb-3">
                        <label for="contactPerson" class="form-label">Contact Person</label>
                        <input type="text" value="{{ $supplier->contact_person }}" class="form-control" id="contactPerson" name="contact_person">
                    </div>
                    <div class="mb-3">
                        <label for="contactEmail" class="form-label">Contact Email</label>
                        <input type="email" value="{{ $supplier->email }}" class="form-control" id="contactEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="contactPhone" class="form-label">Contact Phone</label>
                        <input type="tel" value="{{ $supplier->phone }}" class="form-control" id="contactPhone"
                            name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" value="{{ $supplier->address }}" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="taxId" class="form-label">Tax ID/VAT Number</label>
                        <input type="text" value="{{ $supplier->tax }}" class="form-control" id="taxId" name="tax">
                    </div>
                    <div class="mb-3">
                        <label for="paymentMethod" class="form-label">Payment Method</label>
                        <input type="text" class="form-control" id="paymentMethod">
                    </div>
                    <div class="mb-3">
                        <label for="bin_number" class="form-label">BIN Number</label>
                        <input type="text" value="{{ $supplier->bin_number }}" class="form-control" id="bin_number" name="bin_number">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Supplier Status</label>
                        <select class="form-select form-select-lg" name="status" id="status">
                            <option value="1" {{ $role->status === 1 ? 'selected' : '' }}>{{ __('Active') }}</option>
                            <option value="0" {{ $role->status === 0 ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="notes" class="form-label">Notes</label>
                        <textarea class="form-control" id="notes" name="notes" rows="3">{{ $supplier->note }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
