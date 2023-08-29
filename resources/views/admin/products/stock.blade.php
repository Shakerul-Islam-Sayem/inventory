@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="text-center mb-4">
                    <h2>Product Stock</h2>
                </div>
                <div class="">
                    <table id="myTable" class="table table-bordered table-hover table-striped table-responsive">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Supplier Title</th>
                                <th scope="col">Product Title</th>
                                <th scope="col">Purchase Price</th>
                                <th scope="col">Sale Price</th>
                                <th scope="col">Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $k => $product)
                                <tr>
                                    <<td scope="row">{{ $k + 1 }}</td>
                                    <td>
                                        @php
                                            $supplier = $suppliers->where('id', $product->supplier_id)->first();
                                        @endphp
                                        {{ $supplier ? $supplier->supplier_title : 'N/A' }}
                                    </td>
                                        <td scope="col">{{ $product->product_title }}</td>
                                        <td scope="col">{{ $product->purchase_price }}</td>
                                        <td scope="col">{{ $product->sale_price }}</td>
                                        <td scope="col">{{ $product->quantity }} pcs</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="fw-bolder text-center ">{{ __('Data Not Found') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var table = $('#myTable').DataTable();
        });
    </script>
@endsection
