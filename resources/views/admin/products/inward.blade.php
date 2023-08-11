@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center mb-3">Product Inward</h2>
                <div class="card">
                    <div class="card-title row">
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
                        <table class="table">
                            <thead class="table" style="background-color: rgb(231, 231, 231);">
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Product Title</th>
                                    <th scope="col">Purchase Price</th>
                                    <th scope="col">Salling Price</th>
                                    <th scope="col">Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="d-none d-xl-table-cell">ghfh</td>
                                    <td>fghfgh</td>
                                    <td>fghfg</td>
                                    <td>dfrtngdg</td>
                                    <td>fdgdfg </td>
                                </tr>
                                <tr>
                                    <td class="d-none d-xl-table-cell">ghfh</td>
                                    <td>fghfgh</td>
                                    <td>fghfg</td>
                                    <td>dfrtngdg</td>
                                    <td>fdgdfg </td>
                                </tr>
                                <tr>
                                    <td class="d-none d-xl-table-cell">ghfh</td>
                                    <td>fghfgh</td>
                                    <td>fghfg</td>
                                    <td>dfrtngdg</td>
                                    <td>fdgdfg </td>
                                </tr>
                                <tr>
                                    <td class="d-none d-xl-table-cell">ghfh</td>
                                    <td>fghfgh</td>
                                    <td>fghfg</td>
                                    <td>dfrtngdg</td>
                                    <td>fdgdfg </td>
                                </tr>
                            </tbody>
                        </table>
                        <form action="action.php">

                            <div class="input-group control-group after-add-more">
                                <input type="text" name="addmore[]" class="form-control" placeholder="Enter Name Here">
                                <div class="input-group-btn">
                                    <button class="btn btn-success add-more" type="button"><i
                                            class="glyphicon glyphicon-plus"></i> Add</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
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

        $(document).ready(function() {

            $(".add-more").click(function() {
                var html = $(".copy").html();
                $(".after-add-more").after(html);
            });

            $("body").on("click", ".remove", function() {
                $(this).parents(".control-group").remove();
            });

        });
    </script>
@endsection
