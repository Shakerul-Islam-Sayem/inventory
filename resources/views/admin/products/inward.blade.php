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
                            <div class="form-floating">
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
                            </datalist>
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
                            <tbody id="optionSetContainer">
                                <tr id="optionSet">
                                    <td id="serial-number" class="d-none d-xl-table-cell">1</td>
                                    <td><input class="form-control" type="text" name="Product Title" id="product_title"
                                            placeholder="Product Title">
                                    </td>
                                    <td><input class="form-control" type="text" name="Product Title" id="PurchasePrice"
                                            placeholder="Purchase Price">
                                    </td>
                                    <td><input class="form-control" type="text" name="Product Title" id="sallingPrice"
                                            placeholder="Salling Price">
                                    </td>
                                    <td><input class="form-control" type="text" name="Product Title" id="quantity"
                                            placeholder="Quantity">
                                    </td>
                                    <td class="d-flex">
                                        <button type="button" id="add"
                                            class="form-control btn btn-dark me-1"><i class="ti ti-plus"></i></button>
                                        <button type="button" class="remove btn btn-dark"><i class="ti ti-minus"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
@endsection
