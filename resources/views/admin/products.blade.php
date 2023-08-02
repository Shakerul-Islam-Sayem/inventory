@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="container mt-4">
                    <h2>Add Product</h2>
                    <form>
                        <div class="mb-3">
                            <label for="product-name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="product-name" name="product-name" required>
                        </div>

                        <div class="mb-3">
                            <label for="product-description" class="form-label">Product Description</label>
                            <textarea class="form-control" id="product-description" name="product-description" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="product-price" class="form-label">Product Price</label>
                            <input type="number" class="form-control" id="product-price" name="product-price"
                                step="0.01" required>
                        </div>

                        <div class="mb-3">
                            <label for="product-quantity" class="form-label">Product Quantity</label>
                            <input type="number" class="form-control" id="product-quantity" name="product-quantity"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="product-category" class="form-label">Product Category</label>
                            <select class="form-control" id="product-category" name="product-category" required>
                                <option value="" disabled selected>Select a category</option>
                                <option value="category1">Category 1</option>
                                <option value="category2">Category 2</option>
                                <option value="category3">Category 3</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Product</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
