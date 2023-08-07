@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="container mt-5">
                    <h2>Product Inward</h2>
                    <form id="productInwardForm">
                        <div class="mb-3">
                            <label for="title" class="form-label">Product Title</label>
                            <input type="text" class="form-control" id="title">
                        </div>
                        <!-- Add other input fields (purchase price, selling price, stock available, id, sku, invoice upload, category, supplier) -->

                        <div class="mb-3">
                            <label for="purchasePrice" class="form-label">Purchase Price</label>
                            <input type="number" class="form-control" id="purchasePrice">
                        </div>

                        <!-- Add other input fields (selling price, stock available, id, sku, invoice upload, category, supplier) -->

                        <div class="mb-3">
                            <label for="sellingPrice" class="form-label">Selling Price</label>
                            <input type="number" class="form-control" id="sellingPrice">
                        </div>

                        <!-- Add other input fields (stock available, id, sku, invoice upload, category, supplier) -->

                        <div class="mb-3">
                            <label for="stockAvailable" class="form-label">Stock Available</label>
                            <input type="number" class="form-control" id="stockAvailable">
                        </div>

                        <!-- Add other input fields (id, sku, invoice upload, category, supplier) -->

                        <!-- Profit Margin Calculation -->
                        <div class="mb-3">
                            <label for="profitMargin" class="form-label">Profit Margin (%)</label>
                            <input type="number" class="form-control" id="profitMargin" readonly>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

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
                                <input type="text" name="rate" id="rate2" class="rate" onblur="getAmount()">
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
                </div>
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
