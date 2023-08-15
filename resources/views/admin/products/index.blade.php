@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-body py-5">
                <table class="table data-table py-5">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Product Title</th>
                            <th scope="col">Product Description</th>
                            <th scope="col">Product SKU</th>
                            <th scope="col">Purchase Price</th>
                            <th scope="col">Sale Price</th>
                            <th scope="col">Product Category</th>
                            <th scope="col">Supplier</th>
                            <th scope="col">Product Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $k => $product)
                        <tr>
                            <th scope="row">{{ $k + 1}}</th>
                            <th scope="col">{{ $product->product_title }}</th>
                            <th scope="col">{{ $product->product_description }}</th>
                            <th scope="col">{{ $product->product_sku }}</th>
                            <th scope="col">{{ $product->purchase_price }}</th>
                            <th scope="col">{{ $product->sale_price }}</th>
                            <th scope="col">{{ $product->category_id }}</th>
                            <th scope="col">{{ $product->supplier_id }}</th>
                            <th scope="col">Product Image</th>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center ">{{ __('Data Not Found') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
