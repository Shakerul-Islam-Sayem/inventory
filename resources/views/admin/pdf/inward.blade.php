<!DOCTYPE html>
<html>

<head>
    <title>Inventory</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>Date: {{ $date }}</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>

        <table class="table data-table py-5">
            <thead class="table-dark table-responsive">
                <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Product Title</th>
                    <th scope="col">Purchase Price</th>
                    <th scope="col">Sale Price</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $totalPurchaseAmount = 0;
                @endphp

                @forelse ($inwarddetails as $k => $inwarddetail)
                    <tr>
                        <td scope="row">{{ $k + 1 }}</td>
                        <td scope="col">{{ $inwarddetail->product->product_title }}</td>
                        <td scope="col">{{ $inwarddetail->purchase_price }}</td>
                        <td scope="col">{{ $inwarddetail->sale_price }}</td>
                        <td scope="col">{{ $inwarddetail->quantity }} pcs</td>
                    </tr>

                    @php
                        $totalPurchaseAmount += $inwarddetail->purchase_price * $inwarddetail->quantity;
                    @endphp
                @empty
                    <tr>
                        <td colspan="6" class="fw-bolder text-center ">{{ __('Data Not Found') }}</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="text-center">
            <h3>Total Purchase Amount: {{ $totalPurchaseAmount }}/-</h3>
        </div>

</body>

</html>
