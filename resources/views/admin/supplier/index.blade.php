@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body py-5">
                <table class="table data-table py-1">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Supplier Title</th>
                            <th scope="col">Owner Name</th>
                            <th scope="col">Contact Person</th>
                            <th scope="col">Contact Email</th>
                            <th scope="col">Contact Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Tax ID/VAT Number</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">BIN Number</th>
                            <th scope="col">Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td scope="col">All Time</td>
                            <td scope="col">Minhaz</td>
                            <td scope="col">Tanvir</td>
                            <td scope="col">example@gmail.com</td>
                            <td scope="col">880 1612 155632</td>
                            <td scope="col">Mirpur - 12</td>
                            <td scope="col">12‑3456789‑01</td>
                            <td scope="col">Bank Transer</td>
                            <td scope="col">624000 – 626999</td>
                            <td scope="col">Notes</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
