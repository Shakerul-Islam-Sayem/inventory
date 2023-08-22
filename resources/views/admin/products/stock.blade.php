@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="text-center mb-4">
                    <h2>Product Stock</h2>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-hover table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Supplier Title</th>
                                <th scope="col">Product Title</th>
                                <th scope="col">Purchase Price</th>
                                <th scope="col">Sale Price</th>
                                <th scope="col">Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Loop through your stock records here -->
                            {{-- @foreach ($stock as $item) --}}
                            <tr>
                                {{-- <td>{{ $item->product_title }}</td>
                                <td>{{ $item->purchase_price }}</td>
                                <td>{{ $item->sale_price }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>{{ $item->supplier_title }}</td> --}}
                                <td>1</td>
                                <td>Samsang</td>
                                <td>Samsang Note s23</td>
                                <td>142939/-</td>
                                <td>145695/-</td>
                                <td>353 pcs</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Vivo</td>
                                <td>Vivo X34</td>
                                <td>90939/-</td>
                                <td>93695/-</td>
                                <td>53 pcs</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Supplier Y</td>
                                <td>Product B</td>
                                <td>4053/-</td>
                                <td>6053/-</td>
                                <td>506 pcs</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Realme</td>
                                <td>Narzo 50i</td>
                                <td>62939/-</td>
                                <td>64695/-</td>
                                <td>169 pcs</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Vivo</td>
                                <td>Vivo X54</td>
                                <td>20939/-</td>
                                <td>32695/-</td>
                                <td>53 pcs</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Supplier X</td>
                                <td>Product A</td>
                                <td>5053/-</td>
                                <td>7553/-</td>
                                <td>1006 pcs</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Supplier Z</td>
                                <td>Product C</td>
                                <td>3053/-</td>
                                <td>4553/-</td>
                                <td>756 pcs</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Vivo</td>
                                <td>Vivo X34</td>
                                <td>90939/-</td>
                                <td>93695/-</td>
                                <td>53 pcs</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Supplier Y</td>
                                <td>Product B</td>
                                <td>4053/-</td>
                                <td>6053/-</td>
                                <td>506 pcs</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Realme</td>
                                <td>Narzo 50i</td>
                                <td>62939/-</td>
                                <td>64695/-</td>
                                <td>169 pcs</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Vivo</td>
                                <td>Vivo X54</td>
                                <td>20939/-</td>
                                <td>32695/-</td>
                                <td>53 pcs</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Supplier X</td>
                                <td>Product A</td>
                                <td>5053/-</td>
                                <td>7553/-</td>
                                <td>1006 pcs</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Supplier Z</td>
                                <td>Product C</td>
                                <td>3053/-</td>
                                <td>4553/-</td>
                                <td>756 pcs</td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            var table = $('#myTable').DataTable();
        });
    </script>
@endsection
