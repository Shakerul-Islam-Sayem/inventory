@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        @include('partials.admin.flash')
        <div class="card">
            <div class="card-body py-1">
                <div class="card-header ps-0 bg-white text-center d-flex justify-content-between">
                    <h2 class=" fw-bolder ">Product Return List</h2>
                    <div>
                        <a href="{{ route('return.create') }}" class="btn btn-lg btn-primary">Add New</a>
                        {{-- <a  href="{{ route('inward_pdf') }}" class="btn btn-lg btn-primary">Print Invoice</a> --}}
                    </div>
                </div>
                <div class="row mb-3 gx-2">
                    <div class="col-3">
                        <input class=" form-control border-dark" type="datetime-local" name="date_received" value="{{ date('Y-m-d\TH:i') }}" id="">
                    </div>
                </div>

                <table class="table data-table gap-5">
                    <thead class="table-dark table-responsive">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Product Title</th>
                            <th scope="col">Purchase Price</th>
                            <th scope="col">Sale Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @php
                            $totalPurchaseAmount = 0;
                        @endphp --}}

                        @forelse ($productreturns as $k => $productreturn)
                            <tr class="" style="height: 34px">
                                <td scope="row">{{ $k + 1 }}</td>
                                <td scope="col">{{ $productreturn->product->product_title }}</td>
                                <td scope="col">{{ $productreturn->purchase_price }}</td>
                                <td scope="col">{{ $productreturn->sale_price }}</td>
                                <td scope="col">{{ $productreturn->quantity }} pcs</td>
                                <td scope="col">{{ $productreturn->date_received }}</td>
                            </tr>

                            {{-- @php
                                $totalPurchaseAmount += $productreturn->purchase_price * $productreturn->quantity;
                            @endphp --}}
                        @empty
                            <tr>
                                <td colspan="6" class="fw-bolder text-center ">{{ __('Data Not Found') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="text-center">
                    {{-- <h3>Total Purchase Amount: {{ $totalPurchaseAmount }}/-</h3> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function showConfirmation(button) {
            Swal.fire({
                title: 'Are you sure?',
                text: "This action is irreversible!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    button.closest('form').submit();
                }
            });
        }
    </script>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script></script>
@endsection
