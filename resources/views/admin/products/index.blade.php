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
                        <tr>
                            <th scope="row">1</th>
                            <th scope="col">Cotton Polo - Navy Blue</th>
                            <th scope="col">The Polo t-shirt is made with Double PK fabric which features premium 80% combed compact organic cotton. </th>
                            <th scope="col">Double PK</th>
                            <th scope="col">850.00</th>
                            <th scope="col">900.00</th>
                            <th scope="col">T-shirt</th>
                            <th scope="col">FabriLife</th>
                            <th scope="col">Product Image</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
