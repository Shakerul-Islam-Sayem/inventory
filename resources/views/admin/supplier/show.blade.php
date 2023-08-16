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
                <div class="d-flex me-5">
                    <dt class="col-sm-3">
                        <a href="{{ route('supplier.index') }}" class="btn btn-primary me-3">Back to List</a>
                    </dt>
                    <dt class="col-sm-9">
                        <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="#" onclick="showConfirmation(this)" class="btn btn-danger">Delete</a>
                        </form>
                    </dt>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function showConfirmation(button) {
            Swal.fire({
                title: 'Are you sure?',
                text: "This action is irreversible!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    button.closest('form').submit();
                }
            });
        }
    </script>
@endsection
