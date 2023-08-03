@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-body py-5">
                <table class="table data-table py-5">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Promo Title</th>
                            <th scope="col">Promo Code</th>
                            <th scope="col">Promo Type</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Coupon</td>
                            <td>XXXX-XXXX-XXXX</td>
                            <td>Coupon</td>
                            <td>Active</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
