<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            @forelse ($inwarddetails as $k => $inwarddetail)
                            <p style="color: #7e8d9f;font-size: 20px;">Inward >> <strong>ID:
                                #00{{ $inwarddetail->inward->inward_id }}

                            @empty
                            @endforelse
                            </strong></p>
                            <div class="col-xl-3 float-start">
                                <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
                                        class="fas fa-print text-primary"></i> Print</a>
                                <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i
                                        class="far fa-file-pdf text-danger"></i> Export</a>
                            </div>
                        </div>
                        <div class="col-6 float-end">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/logos/inventory.png') }}" width="180"
                                    alt="" />
                                <p class="pt-0">Inventory.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-8">
                                <ul class="list-unstyled">
                                    <li class="text-muted">From: <span
                                            style="color:#5d9fc5 ;">{{ $inwarddetail->inward->supplier_id }}</span></li>
                                    <li class="text-muted">Street, City</li>
                                    <li class="text-muted">State, Country</li>
                                    <li class="text-muted"><i class="fas fa-phone"></i> 123-456-789</li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <p class="text-muted">Invoice</p>
                                <ul class="list-unstyled">
                                    <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                            class="fw-bold">ID:</span>#123-456</li>
                                    <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                            class="fw-bold">Creation Date: </span>{{ $date }}</li>
                                    <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                            class="me-1 fw-bold">Status:</span><span
                                            class="btn btn-info bg-warning text-black fw-bold">
                                            Unpaid</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row my-2 mx-1 justify-content-center">
                            <table style="border-collapse: collapse; border: 1px solid #000000;"
                                class="table table-primary table-striped table-bordered border-dark caption-top table-responsive gap-2">
                                <thead style="background-color:#84B0CA; width:100%;" class="text-white">
                                    <tr style="border-collapse: collapse; border: .5px solid #000000;">
                                        <th style="border: .5px solid rgb(0, 0, 0); padding:3px;" scope="col">SL</th>
                                        <th style="border: .5px solid rgb(0, 0, 0); padding:3px;"scope="col">Product
                                            Title</th>
                                        <th style="border: .5px solid rgb(0, 0, 0); padding:3px;"scope="col">Purchase
                                            Price</th>
                                        <th style="border: .5px solid rgb(0, 0, 0); padding:3px;"scope="col">Sale
                                            Price</th>
                                        <th style="border: .5px solid rgb(0, 0, 0); padding:3px;"scope="col">Quantity
                                        </th>
                                        <th style="border: .5px solid rgb(0, 0, 0); padding:3px;"scope="col">Date
                                            Receive</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $totalPurchaseAmount = 0;
                                        $totalPurchaseAmountTax = 0;
                                        $totalAmount = 0;
                                    @endphp

                                    @forelse ($inwarddetails as $k => $inwarddetail)
                                        <tr style="border-collapse: collapse; border: .5px solid #000000;">
                                            <td style="border: .5px solid rgb(0, 0, 0); padding:3px" scope="row">
                                                {{ $k + 1 }}</td>
                                            <td style="border: .5px solid rgb(0, 0, 0); padding:3px" scope="col">
                                                {{ $inwarddetail->product->product_title }}</td>
                                            <td style="border: .5px solid rgb(0, 0, 0); padding:3px" scope="col">
                                                {{ $inwarddetail->purchase_price }}</td>
                                            <td style="border: .5px solid rgb(0, 0, 0); padding:3px" scope="col">
                                                {{ $inwarddetail->sale_price }}</td>
                                            <td style="border: .5px solid rgb(0, 0, 0); padding:3px" scope="col">
                                                {{ $inwarddetail->quantity }} pcs</td>
                                            <td style="border: .5px solid rgb(0, 0, 0); padding:3px" scope="col">
                                                {{ $inwarddetail->inward->date_received }}</td>
                                        </tr>

                                        @php
                                            $totalPurchaseAmount += $inwarddetail->purchase_price * $inwarddetail->quantity;
                                            $totalPurchaseAmountTax += $totalPurchaseAmount * 0.15;
                                            $totalAmount += $totalPurchaseAmount + $totalPurchaseAmountTax;
                                        @endphp
                                    @empty
                                        <tr>
                                            <td colspan="6" class="fw-bolder text-center ">
                                                {{ __('Data Not Found') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <hr>
                        <div class="row float-end">
                            <div class="col-xl-3">
                                <ul class="list-unstyled">
                                    <li class="text-muted fw-bolder ms-3"><span class="text-black me-4">SubTotal
                                            :</span>{{ $totalPurchaseAmount }}/-</li>
                                    <li class="text-muted fw-bolder ms-3 mt-2"><span class="text-black me-4">Tax(15%)
                                            :</span>{{ $totalPurchaseAmountTax }}/-
                                    </li>
                                </ul>
                                <p class="text-black fw-bolder float-start"><span class="text-black me-3"> Total
                                        Amount :</span><span style="font-size: 23px;">{{ $totalAmount }}/-</span></p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
