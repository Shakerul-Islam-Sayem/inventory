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
                    <h2 class=" fw-bolder ">Product Outward List</h2>
                    <div>
                        <a href="{{ route('outward.create') }}" class="btn btn-lg btn-primary">Add New</a>
                        <a  href="{{ route('outward_pdf') }}" class="btn btn-lg btn-primary">Print PDF</a>
                    </div>
                </div>
                <div class="row mb-3 gx-2">
                    <div class="col-3">
                        <select aria-label="Default select example" name="outward_id"
                            class="select2 select2-bootstrap-5 form-select border-dark">
                            <option value="" disabled selected>Select outward Id</option>
                            @forelse ($outwarddetails as $key => $outwarddetail)
                                <option value="{{ $outwarddetail->id }}">{{ $outwarddetail->outward_id }}</option>
                            @empty
                                <option value="1">No outward</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="col-3">
                        <input class=" form-control border-dark" type="datetime-local" name="date_received" id="">
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
                        @php
                            $totalPurchaseAmount = 0;
                        @endphp

                        @forelse ($outwarddetails as $k => $outwarddetail)
                            <tr class="" style="height: 34px">
                                <td scope="row">{{ $k + 1 }}</td>
                                <td scope="col">{{ $outwarddetail->product->product_title }}</td>
                                <td scope="col">{{ $outwarddetail->purchase_price }}</td>
                                <td scope="col">{{ $outwarddetail->sale_price }}</td>
                                <td scope="col">{{ $outwarddetail->quantity }} pcs</td>
                                <td scope="col">{{ $outwarddetail->outward->date_received }}</td>
                            </tr>

                            @php
                                $totalPurchaseAmount += $outwarddetail->sale_price * $outwarddetail->quantity;
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
