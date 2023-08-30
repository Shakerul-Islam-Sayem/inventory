@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <h2 class="mb-3 text-center text-decoration-underline fw-bolder">Pruduct Details</h2>
                </div>
                <table class="table data-table py-5">
                    <tbody>
                            <tr>
                                <td colspan="2">
                                    <dl class="row">
                                        <dt class="col-sm-3">Product Title</dt>
                                        <dd class="col-sm-9">{{ $product->product_title }}</dd>

                                        <dt class="col-sm-3">Product Description</dt>
                                        <dd class="col-sm-9">{{ $product->product_description }}</dd>

                                        <dt class="col-sm-3">Product SKU</dt>
                                        <dd class="col-sm-9">{{ $product->product_sku }}</dd>

                                        <dt class="col-sm-3">Purchase Price</dt>
                                        <dd class="col-sm-9">{{ $product->purchase_price }}</dd>

                                        <dt class="col-sm-3">Sale Price</dt>
                                        <dd class="col-sm-9">{{ $product->sale_price }}</dd>

                                        <dt class="col-sm-3">Profit</dt>
                                        <dd class="col-sm-9">{{ $product->sale_price - $product->purchase_price }}</dd>

                                        <dt class="col-sm-3">Profit Margin</dt>
                                        <dd class="col-sm-9">
                                            {{ (($product->sale_price - $product->purchase_price) / $product->purchase_price) * 100,2 }}%
                                        </dd>
                                        <dt class="col-sm-3">Quantity</dt>
                                        <dd class="col-sm-9">{{ $product->quantity }} pcs</dd>

                                        <dt class="col-sm-3">Product Category</dt>
                                        <dd class="col-sm-9">{{ $product->category->title }}</dd>

                                        <dt class="col-sm-3">Supplier</dt>
                                        <dd class="col-sm-9">{{ $product->supplier->supplier_title }}</dd>
                                    </dl>
                                </td>
                            </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    <a href="{{ route('product.index') }}" class="btn btn-primary me-3">Back to List</a>
                    <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="#" onclick="showConfirmation(this)" class="btn btn-danger">Delete</a>
                    </form>
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
