@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="container mt-4">
                    <h2>Product Outward</h2>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="product_id" class="form-label">Product ID</label>
                            <input type="text" class="form-control" id="product_id" name="product_id">
                        </div>
                        <div class="mb-3">
                            <label for="product_title" class="form-label">Product Title</label>
                            <select class="form-select" id="product_title" name="product_title">
                                <option value="product1">Product 1</option>
                                <option value="product2">Product 2</option>
                                <!-- Add more options here -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category ID</label>
                            <select class="form-select" id="category_id" name="category_id">
                                <option value="category1">Category 1</option>
                                <option value="category2">Category 2</option>
                                <!-- Add more options here -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="supplier" class="form-label">Supplier</label>
                            <select class="form-select" id="supplier" name="supplier">
                                <option value="supplier1">Supplier 1</option>
                                <option value="supplier2">Supplier 2</option>
                                <option value="supplier3">Supplier 3</option>
                                <!-- Add more options here -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity">
                        </div>
                        <div class="mb-3">
                            <label for="purchase_price" class="form-label">Purchase Price</label>
                            <input type="text" class="form-control" id="purchase_price" name="purchase_price">
                        </div>
                        <div class="mb-3">
                            <label for="sale_price" class="form-label">Sale Price</label>
                            <input type="text" class="form-control" id="sale_price" name="sale_price">
                        </div>
                        <div class="mb-3">
                            <label for="date_received" class="form-label">Date Received</label>
                            <input type="date" class="form-control" id="date_received" name="date_received">
                        </div>
                        <div class="mb-3">
                            <label for="invoice_image" class="form-label">Invoice Image</label>
                            <input type="file" class="form-control" id="invoice_image" name="invoice_image">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
