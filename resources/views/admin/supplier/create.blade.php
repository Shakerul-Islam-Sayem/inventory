@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('supplier.store') }}" method="post">
                    @csrf
                    <h2>Supllier Create</h2>
                    <div class="mb-3">
                        <label for="supplierName" class="form-label">Supplier Title</label>
                        <input type="text" class="form-control" id="supplierTitle" name="supplier_title">
                    </div>
                    <div class="mb-3">
                        <label for="ownerName" class="form-label">Owner Name</label>
                        <input type="text" class="form-control" id="ownerName" name="owner_name">
                    </div>
                    <div class="mb-3">
                        <label for="contactPerson" class="form-label">Contact Person</label>
                        <input type="text" class="form-control" id="contactPerson" name="contact_person">
                    </div>
                    <div class="mb-3">
                        <label for="contactEmail" class="form-label">Contact Email</label>
                        <input type="email" class="form-control" id="contactEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="contactPhone" class="form-label">Contact Phone</label>
                        <input type="tel" class="form-control" id="contactPhone" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="taxId" class="form-label">Tax ID/VAT Number</label>
                        <input type="text" class="form-control" id="taxId" name="tax">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="paymentMethod" class="form-label">Payment Method</label>
                        <input type="text" class="form-control" id="paymentMethod">
                    </div> --}}
                    <div class="mb-3">
                        <label for="bin_number" class="form-label">BIN Number</label>
                        <input type="text" class="form-control" id="bin_number" name="bin_number">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Supplier Status</label>
                        <select class="form-select form-select-lg" name="status" id="status">
                            <option selected value="1">Active</option>
                            <option value="0">Deactive</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="notes" class="form-label">Notes</label>
                        <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
