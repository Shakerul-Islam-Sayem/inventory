@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="container mt-1">
                    <h2>Add Product</h2>
                    <form>
                        <div class="mb-3">
                            <label for="product-title" class="form-label">Product Title</label>
                            <input type="text" class="form-control" id="product-title" title="product-title" required>
                        </div>

                        <div class="mb-3">
                            <label for="product-description" class="form-label">Product Description</label>
                            <textarea class="form-control" id="product-description" name="product-description" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="product-sku" class="form-label">Product SKU</label>
                            <input type="text" class="form-control" id="product-sku" name="product-sku" required>
                        </div>

                        <div class="mb-3">
                            <label for="purchase-price" class="form-label">Purchase Price</label>
                            <input type="number" class="form-control" id="purchase-price" name="purchase-price"
                                step="0.01" required>
                        </div>

                        <div class="mb-3">
                            <label for="sale-price" class="form-label">Sale Price</label>
                            <input type="number" class="form-control" id="sale-price" name="sale-price" step="0.01"
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

                        <div class="mb-3">
                            <label for="product-category" class="form-label">Product Subcategory</label>
                            <select class="form-control" id="product-category" name="product-category">
                                <option value="" disabled selected>Select a Subcategory</option>
                                <option value="category1">Subcategory 1</option>
                                <option value="category2">Subcategory 2</option>
                                <option value="category3">Subcategory 3</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="supplier" class="form-label">Supplier</label>
                            <select class="form-select" aria-label="Default select example" id="supplier" name="supplier" required>
                                <option value="" disabled selected>Select a category</option>
                                <option value="supplier">Supplier 1</option>
                                <option value="supplier">Supplier 2</option>
                                <option value="supplier">Supplier 3</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <div class="col-md-6">
                                <div class="mb-3 row item-align-center">
                                    <label for="product-img" class="form-label">Product Image</label>
                                    <div class="col-9">
                                        <input class="form-control dark" type="file" accept="image/png, image/jpeg" multiple id="formFile"
                                            onchange="preview()">
                                    </div>
                                    <div class="col-3 text-end" id="removeButtonContainer" style="display: none;">
                                        <button onclick="clearImage()" style="border: 1px solid rgb(160, 179, 221)"
                                            class="btn btn-outline ms-1">Remove</button>
                                    </div>
                                </div>
                                <img id="frame" src="" class="rounded shadow-lg img-fluid" />
                            </div>

                            <script>
                                function preview() {
                                    var fileInput = event.target;
                                    var file = fileInput.files[0];
                                    if (file) {
                                        document.getElementById('removeButtonContainer').style.display = "block";
                                        frame.src = URL.createObjectURL(file);
                                    } else {
                                        document.getElementById('removeButtonContainer').style.display = "none";
                                        frame.src = "";
                                    }
                                }
                            
                                function clearImage() {
                                    document.getElementById('formFile').value = null;
                                    frame.src = "";
                                    document.getElementById('removeButtonContainer').style.display = "none";
                                    event.preventDefault();
                                }
                            </script>
                            
                        </div>

                        <button type="submit" class="btn btn-lg btn-primary">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
