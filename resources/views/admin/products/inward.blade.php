@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h2>Product Inward</h2>
                <form>
                    <div class="mb-3">
                        <label for="productId" class="form-label">Product ID</label>
                        <input type="text" class="form-control" id="productId">
                    </div>
                    <div class="mb-3">
                        <label for="categoryId" class="form-label">Category ID</label>
                        <input type="text" class="form-control" id="categoryId">
                    </div>
                    <div class="mb-3">
                        <label for="supplierId" class="form-label">Supplier ID</label>
                        <input type="text" class="form-control" id="supplierId">
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity">
                    </div>
                    <div class="mb-3">
                        <label for="purchasePrice" class="form-label">Purchase Price</label>
                        <input type="number" class="form-control" id="purchasePrice">
                    </div>
                    <div class="mb-3">
                        <label for="salePrice" class="form-label">Sale Price</label>
                        <input type="number" class="form-control" id="salePrice">
                    </div>
                    <div class="mb-3">
                        <label for="invoiceNumber" class="form-label">Invoice Number</label>
                        <input type="text" class="form-control" id="invoiceNumber">
                    </div>
                    <div class="mb-3">
                        <label for="dateReceived" class="form-label">Date Received</label>
                        <input type="date" class="form-control" id="dateReceived">
                    </div>
                    <div class="mb-3">
                        <div class="col-md-6">
                            <div class="mb-3 row item-align-center">
                                <label for="invoiceImage" class="form-label">Invoice Image</label>
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
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
{{-- 
                <div class="container mt-5">
                    <h2>Summation Calculator</h2>
                    <div class="row">
                        <div class="col">
                            <input type="number" class="form-control" id="input1" placeholder="Enter number">
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="input2" placeholder="Enter number">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="sumResult" readonly>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <br /><br /><br />
                    <h3 class="text-center">Calculate the sum of input values using Jquery or Javascript</h3>
                    <form class="form-horizontal" action="#">
                        <div id="newuser"></div>
                        <div class="form-group row" style="background: #218f0b;">
                            <label class="control-label col-sm-2" for="value">Value:</label>
                            <div class="col-sm-2">
                                <input type="text" name="value" id="value" class="value">
                            </div>
                            <label class="control-label col-sm-1" for="Percentage">Percentage:</label>
                            <div class="col-sm-2">
                                <input type="text" name="rate" id="rate" class="rate" onblur="getAmount()">
                            </div>
                            <label class="control-label col-sm-1" for="Amount">Amount:</label>
                            <div class="col-sm-2">
                                <input type="text" name="amount" id="amount" class="amount">
                            </div>

                        </div>
                        <div class="form-group row" style="background: #8d8f0b;">
                            <label class="control-label col-sm-2" for="Value">Value:</label>
                            <div class="col-sm-2">
                                <input type="text" name="value" id="value2" class="value">
                            </div>
                            <label class="control-label col-sm-1" for="Percentage">Percentage:</label>
                            <div class="col-sm-2">
                                <input type="text" name="rate" id="rate2" class="rate"
                                    onblur="getAmount()">
                            </div>
                            <label class="control-label col-sm-1" for="Amount">Amount:</label>
                            <div class="col-sm-2">
                                <input type="text" name="amount" id="amount2" class="amount">
                            </div>

                        </div>
                        <br /><br>
                        <p style="text-align: center;font-weight: bold;">
                            Total Value:<input type="text"
                                style="border: none;border-bottom: 1px solid #eb5f5f;outline: none;" id="total_value"><br>
                            Total Percent:<input type="text"
                                style="border: none;border-bottom: 1px solid #73d878;outline: none;" id="total_rate"><br>
                            Total Amount:<input type="text"
                                style="border: none;border-bottom: 1px solid #7260db;outline: none;"
                                id="total_amount"><br>
                        </p>

                    </form>
                </div> --}}
                <!-- Bootstrap JS Bundle -->


                <script>
                    $(document).ready(function() {
                        // Calculate Profit Margin
                        $('#purchasePrice, #sellingPrice').on('input', function() {
                            const purchasePrice = parseFloat($('#purchasePrice').val());
                            const sellingPrice = parseFloat($('#sellingPrice').val());
                            const profitMargin = ((sellingPrice - purchasePrice) / purchasePrice) * 100;
                            $('#profitMargin').val(profitMargin.toFixed(2));
                        });

                        // Handle Form Submission
                        $('#productInwardForm').submit(function(event) {
                            event.preventDefault();

                            // Gather form data
                            const formData = $(this).serialize();

                            // Perform Ajax POST request to save the product inward data to the server
                            $.ajax({
                                type: 'POST',
                                url: 'your_backend_endpoint_to_save_product_inward.php',
                                data: formData,
                                success: function(response) {
                                    // Handle success response, e.g., show a success message
                                    alert('Product inward saved successfully!');

                                    // Generate the invoice PDF and display a popup (you will need to implement this part on the server-side)
                                    generateInvoicePDF(
                                        response
                                    ); // Assuming the server returns the newly created product inward ID

                                    // Clear the form after successful submission
                                    $('#productInwardForm')[0].reset();
                                },
                                error: function() {
                                    // Handle error response, e.g., show an error message
                                    alert('An error occurred. Please try again later.');
                                }
                            });
                        });
                    });

                    $(document).ready(function() {
                        // Function to calculate the sum
                        function calculateSum() {
                            const num1 = parseFloat($('#input1').val());
                            const num2 = parseFloat($('#input2').val());
                            const sum = isNaN(num1) || isNaN(num2) ? 0 : num1 + num2;
                            $('#sumResult').val(sum);
                        }

                        // Calculate sum on input change
                        $('#input1, #input2').on('input', calculateSum);
                    });
                </script>

            </div>
        </div>
    </div>
@endsection
