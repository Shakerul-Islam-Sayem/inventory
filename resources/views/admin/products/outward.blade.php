@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        @include('partials.admin.flash')
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-3">Product Outward</h2>
                <form action="{{ route('outward.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3 gx-2">
                        <div class="col-3">
                            <input class="form-control border-dark" type="text" placeholder="Customer Name"
                                name="customer_name">
                        </div>
                        <div class="col-3 d-flex align-items-center">
                            <input class="form-control border-dark" type="number" name="customer_phone" id="customer_phone"
                                placeholder="Customer Phone">
                        </div>
                        <div class="col-3">
                            <input class=" form-control border-dark" type="datetime-local" name="date_received"
                                id="">
                        </div>
                    </div>

                    <div class="row mb-2 gx-2">
                        <div class="col-2">
                            <select aria-label="Default select example" id="Payment" name="payment_method"
                                class="select2 select2-bootstrap-5 form-select border-dark">
                                <option value="" disabled selected>Select a Payment Method</option>
                                <option value="1">Cash</option>
                                <option value="2">Bkash</option>
                                <option value="3">Nagad</option>
                                <option value="4">UCash</option>
                                <option value="5">Rocket</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <input class=" form-control border-dark" placeholder="Transection ID" type="text"
                                name="trxid">
                        </div>
                        <div class="col-3">
                            <input class=" form-control border-dark" type="number" name="discount" placeholder="Dicount">
                        </div>
                        <div class="col-3">
                            <input class=" form-control border-dark" type="text" name="comment" placeholder="Comment">
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
                                        <select name="product_id[]"
                                            class="select2 select2-bootstrap-5 form-select product-select">
                                            <option value="" disabled selected>Select a Product</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input class="form-control purchase-price" type="text" name="purchase_price[]"
                                            placeholder="Purchase Price">
                                    </td>
                                    <td><input class="form-control sale-price" type="text" name="sale_price[]"
                                            placeholder="Selling Price">
                                    </td>
                                    <td><input class="form-control" type="text" name="quantity[]" id="quantity"
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
        $(document).ready(function() {
            var productData = null;
            $.ajax({
                    "url": "http://localhost/R55/Laravel/inventory/public/api/product",
                    "method": "GET",
                })
                .done(
                    function(data) {
                        productData = [...data];
                        productData.map((item, index) => {
                            $(".product-select").append(
                                `<option value="${item['id']}">${item['product_title']}</option>`);
                        })
                    }
                );

            $(".product-select").on('change', function() {
                var selected = $(this).val();
                var selectedItem = productData.find(function(item, index) {
                    return selected == item['id'];
                });
                var tableRow = $(this).closest('.option-row');
                tableRow.find('.purchase-price').val(selectedItem['purchase_price']);
                tableRow.find('.sale-price').val(selectedItem['sale_price']);
            });
            // add new row on click
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
