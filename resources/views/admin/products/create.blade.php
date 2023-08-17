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
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="product-title" class="form-label">Product Title</label>
                            <input type="text" class="form-control" id="product_title" title="product_title"
                                name="product_title">
                        </div>

                        <div class="mb-3">
                            <label for="product-description" class="form-label">Product Description</label>
                            <textarea class="form-control" id="product-description" name="product_description" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="product-sku" class="form-label">Product SKU</label>
                            <input type="text" class="form-control" id="product-sku" name="product_sku">
                        </div>

                        <div class="mb-3">
                            <label for="purchase-price" class="form-label">Purchase Price</label>
                            <input type="number" class="form-control" id="purchase-price" name="purchase_price"
                                step="0.01">
                        </div>

                        <div class="mb-3">
                            <label for="sale-price" class="form-label">Salling Price</label>
                            <input type="number" class="form-control" id="sale-price" name="sale_price" step="0.01">
                        </div>

                        <div class="mb-3">
                            <label for="product-category" class="form-label">Product Category</label>
                            <select class="form-control" id="product-category" name="category_id">
                                <option value="" disabled selected>Select a category</option>
                                @forelse ($categories as $key => $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @empty
                                    <option value="1">No Category</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="supplier" class="form-label">Supplier</label>
                            <select class="form-select" aria-label="Default select example" id="supplier"
                                name="supplier_id">
                                <option value="" disabled selected>Select a supplier</option>
                                @forelse ($suppliers as $key => $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->supplier_title }}</option>
                                @empty
                                    <option value="1">No supplier</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="mb-3">
                            <div class="col-md-6">
                                <div class="mb-3 row item-align-center">
                                    <label for="product-img" class="form-label">Product Image</label>
                                    <div class="col-9">
                                        <input class="form-control dark" type="file" accept="image/png, image/jpeg"
                                            multiple id="formFile" name="product_image" onchange="preview()">
                                    </div>
                                    <div class="col-3 text-end" id="removeButtonContainer" style="display: none;">
                                        <button onclick="clearImage()" style="border: 1px solid rgb(160, 179, 221)"
                                            class="btn btn-outline ms-1">Remove</button>
                                    </div>
                                </div>
                                <img id="frame" src="" class="rounded shadow-lg img-fluid" />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
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
@endsection
