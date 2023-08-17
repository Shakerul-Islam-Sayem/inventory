@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-3">Product Inward</h2>
                <div class=" row">
                    <div class="col-3">
                        <select aria-label="Default select example" id="supplier first" name="supplier_id"
                            class="select2 select2-bootstrap-5 form-select w-100 select-field">
                            <option value="" disabled selected>Select a supplier</option>
                            @forelse ($suppliers as $key => $supplier)
                                <option value="{{ $supplier->id }}">{{ $supplier->supplier_title }}</option>
                            @empty
                                <option value="1">No supplier</option>
                            @endforelse
                        </select>
                        {{-- <div class="form-floating">
                            <input type="text" class="form-control border-dark" id="floatingInput" autoComplete="on"
                                list="suggestions" placeholder="Supplier" required>
                            <label for="floatingInput">Supplier</label>
                        </div>
                        <datalist id="suggestions">

                            <option>First option</option>
                            <option>Second Option</option>
                            <option>Third Option</option>
                            <option>Fourth Option</option>
                            <option>Fifth Option</option>
                            <option>Sixth Option</option>
                            <option>Seventh Option</option>
                        </datalist> --}}
                    </div>
                    <div class="col-3">
                        <input class="p-3 form-control border-dark" required type="datetime-local" name=""
                            id="">
                    </div>
                    <div class="col-6 mb-5 d-flex align-items-center">
                        <input class="form-control p-3 border-dark" type="file" id="formFile" onchange="preview()">
                        <img id="frame" src="" class="p-1 rounded" style="width: 60px;" />
                        <button id="removeButtonContainer" onclick="clearImage()" class="btn btn-danger"><i
                                class="fa-solid fa-xmark"></i></button>
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
                                <th scope="col" class="text-center justify-content-center">Action</th>
                            </tr>
                        </thead>
                        <form action="{{ route('inward.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <tbody id="optionSetContainer">
                                <tr id="optionSet">
                                    <td id="serial-number" class="">1</td>
                                    <td>
                                        <select name="product_id" id="product_id select-field"
                                            class="select2 select2-bootstrap-5 form-select w-100 select-field">
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
                                        <input class="form-control" type="text" name="Product Title" id="PurchasePrice"
                                            placeholder="Purchase Price">
                                    </td>
                                    <td><input class="form-control" type="text" name="Product Title" id="sallingPrice"
                                            placeholder="Salling Price">
                                    </td>
                                    <td><input class="form-control" type="text" name="Product Title" id="quantity"
                                            placeholder="Quantity">
                                    </td>
                                    <td class="d-flex">
                                        <button type="button" id="add" class="form-control btn btn-dark me-1"><i
                                                class="ti ti-plus"></i></button>
                                        <button type="button" class="remove btn btn-dark"><i
                                                class="ti ti-minus"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                    </table>
                    <div class="text-center">
                        <a href="" class="btn btn-primary">Submit</a>
                    </div>
                    </form>
                </div>
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
            // Add new option set
            $("#add").click(function() {
                var optionSet = $("#optionSet");
                var newOptionSet = optionSet.clone(true);
                newOptionSet.find('input').val('');
                newOptionSet.append('<button type="button" class="remove">Remove</button>');
                optionSet.parent().append(newOptionSet);
            });

            // Remove option set
            $(document).on("click", ".remove", function() {
                $(this).closest("#optionSet").remove();
            });
        });
    </script>
    {{-- multilevel dropdown script --}}
    <script>
        $(document).ready(function() {

            // Default option
            var option = '<option value="0" selected="selected">Select Option</option>';

            // Method to clear dropdowns down to a given level
            var clearDropDown = function(arrayObj, startIndex) {
                $.each(arrayObj, function(index, value) {
                    if (index >= startIndex) {
                        $(value).html(option);
                    }
                });
            };

            // Method to disable dropdowns down to a given level
            var disableDropDown = function(arrayObj, startIndex) {
                $.each(arrayObj, function(index, value) {
                    if (index >= startIndex) {
                        $(value).attr('disabled', 'disabled');
                    }
                });
            };

            // Method to disable dropdowns down to a given level
            var enableDropDown = function(that) {
                that.removeAttr('disabled');
            };

            // Method to generate and append options
            var generateOptions = function(element, selection, limit) {
                var options = '';
                for (var i = 1; i <= limit; i++) {
                    options += '<option value="' + i + '">Option ' + selection + '-' + i + '</option>';
                }
                element.append(options);
            };

            // Select each of the dropdowns
            var firstDropDown = $('#first');
            var secondDropDown = $('#second');
            var thirdDropDown = $('#third');

            // Hold selected option
            var firstSelection = '';
            var secondSelection = '';
            var thirdSelection = '';

            // Hold selection
            var selection = '';

            // Selection handler for first level dropdown
            firstDropDown.on('change', function() {

                // Get selected option
                firstSelection = firstDropDown.val();

                // Clear all dropdowns down to the hierarchy
                clearDropDown($('select'), 1);

                // Disable all dropdowns down to the hierarchy
                disableDropDown($('select'), 1);

                // Check current selection
                if (firstSelection === '0') {
                    return;
                }

                // Enable second level DropDown
                enableDropDown(secondDropDown);

                // Generate and append options
                selection = firstSelection;
                generateOptions(secondDropDown, selection, 4);
            });

            // Selection handler for second level dropdown
            secondDropDown.on('change', function() {
                secondSelection = secondDropDown.val();

                // Clear all dropdowns down to the hierarchy
                clearDropDown($('select'), 2);

                // Disable all dropdowns down to the hierarchy
                disableDropDown($('select'), 2);

                // Check current selection
                if (secondSelection === '0') {
                    return;
                }

                // Enable third level DropDown
                enableDropDown(thirdDropDown);

                // Generate and append options
                selection = firstSelection + '-' + secondSelection;
                generateOptions(thirdDropDown, selection, 4);
            });

            // Selection handler for third level dropdown
            thirdDropDown.on('change', function() {
                thirdSelection = thirdDropDown.val();

                console.log(thirdSelection);
                // Final work goes here

            });

            /*
             * In this way we can make any number of dependent dropdowns
             *
             */

        });
    </script>
@endsection
