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
                    <h2 class=" fw-bolder ">Product Inward List</h2>
                    <a href="{{ route('inward.create') }}" class="btn btn-lg btn-primary">Add New</a>
                </div>
                <div class="row mb-3 gx-2">
                    <div class="col-3">
                        <select aria-label="Default select example" id="supplier first" name="supplier_id"
                            class="select2 select2-bootstrap-5 form-select border-dark">
                            <option value="" disabled selected>Select Inward Id</option>
                            @forelse ($inwarddetails as $key => $inwarddetail)
                                <option value="{{ $inwarddetail->id }}">{{ $inwarddetail->inward_id }}</option>
                            @empty
                                <option value="1">No Inward</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="col-3">
                        <input class=" form-control border-dark" type="datetime-local" name="date_received" id="">
                    </div>
                    <div class="col-5 d-flex align-items-center">
                        <input class="form-control border-dark" type="file" name="invoice_image" id="formFile">
                    </div>
                </div>

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

<script>
    
</script>

@endsection
