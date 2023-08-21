@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-3">Product Inward</h2>
                <form action="{{ route('inward.submit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row m-0 gx-2">
                        <div class="col-2">
                            <select aria-label="Default select example" id="supplier first" name="supplier_id"
                                class="select2 select2-bootstrap-5 form-select border-dark">
                                <option value="" disabled selected>Select a supplier</option>
                                @forelse ($suppliers as $key => $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->supplier_title }}</option>
                                @empty
                                    <option value="1">No supplier</option>
                                @endforelse
                            </select>
                        </div>
                        <div class="col-3">
                            <input class=" form-control border-dark" type="datetime-local" name="date_received"
                                id="">
                        </div>
                        <div class="col-3">
                            <input class=" form-control border-dark" type="text" name="invoice_number" placeholder="Invoice Number">
                        </div>
                        <div class="col-4 mb-5 d-flex align-items-center">
                            <input class="form-control border-dark" type="file" name="invoice_image" id="formFile" onchange="preview()">
                            <img id="frame" src="" class="p-1 rounded" style="width: 60px;" />
                            <button id="removeButtonContainer" onclick="clearImage()" class="btn"
                                style="background-color:rgb(190, 151, 92);"><i class="fa-solid fa-xmark"
                                    style="color: beige"></i></button>
                        </div>
                    </div>

                    <div class="">
                        <table class="table table-responsive table-striped">
                            <thead class="table" style="background-color: rgb(230, 228, 253);">
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Product Title</th>
                                    <th scope="col">Purchase Price</th>
                                    <th scope="col">Salling Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col" class="text-center justify-content-center d-flex">Action</th>
                                </tr>
                            </thead>

                            <tbody id="optionSetContainer">
                                <tr id="optionSet" class="option-row">
                                    <td id="serial-number" class="serial-number">1</td>
                                    <td>
                                        <select name="product_id" id="product_id select-field"
                                            class="select2 select2-bootstrap-5 form-select">
                                            <option value="" disabled selected>Select a Product</option>
                                            @forelse ($products as $key => $product)
                                                <option value="{{ $product->id }}">{{ $product->product_title }}</option>
                                            @empty
                                                <option value="1">No product</option>
                                            @endforelse
                                        </select>
                                        {{-- <input class="form-control" type="text" name="Product Title" id="product_title"
                                            placeholder="Product Title"> --}}
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="purchase_price" id="PurchasePrice"
                                            placeholder="Purchase Price">
                                    </td>
                                    <td><input class="form-control" type="text" name="sale_price" id="sellingPrice"
                                            placeholder="Selling Price">
                                    </td>
                                    <td><input class="form-control" type="text" name="quantity" id="quantity"
                                            placeholder="Quantity">
                                    </td>
                                    <td class="d-flex">
                                        <button type="button" id="add" class="form-control btn btn-dark me-1"><i
                                                class="ti ti-plus"></i></button>
                                        <button type="button" id="remove" class="remove btn btn-dark"><i
                                                class="ti ti-minus"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <button type="submit" class="btn-lg btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
    <script>
        function preview() {
            frame.src = URL.createObjectURL(event.target.files[0]);
        }
        var file = fileInput.files[0];
        if (file) {
            document.getElementById('removeButtonContainer').style.display = "block";
            frame.src = URL.createObjectURL(file);
        } else {
            document.getElementById('removeButtonContainer').style.display = "none";
            frame.src = "";
        }

        function clearImage() {
            document.getElementById('formFile').value = null;
            frame.src = "";
        }

        // $(document).on("click", "#new", function() {
        //     var option = $("#option");
        //     var newOption = option.clone(true);
        //     option.parent().append(newOption);
        // });
    </script>

    <script>
        $(document).ready(function() {
            var serialNumber = 1; // Initialize the serial number

            // Add new option set
            $("#add").click(function() {
                var optionSet = $("#optionSet:last");
                var newOptionSet = optionSet.clone(true);
                newOptionSet.find('input').val('');

                // Update the serial number for the new row
                serialNumber++;
                newOptionSet.find('.serial-number').text(serialNumber);

                optionSet.parent().append(newOptionSet);
            });

            // Remove option set
            $(document).on("click", ".remove", function() {
                $(this).closest("#optionSet").remove();
                updateSerialNumbers(); // Update serial numbers after removing a row
            });

            // Update serial numbers for all rows
            function updateSerialNumbers() {
                $(".serial-number").each(function(index) {
                    $(this).text(index + 1);
                });
            }
        });
    </script>
@endsection
