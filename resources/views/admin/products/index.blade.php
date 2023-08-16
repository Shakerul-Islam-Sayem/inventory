@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body py-1">
                <div class="card-header ps-0 bg-white text-center">
                    <h2 class=" fw-bolder ">Product List</h2>
                </div>
                <table class="table data-table py-5">
                    <thead class="table-dark table-responsive">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Product Title</th>
                            {{-- <th scope="col">Product Description</th> --}}
                            {{-- <th scope="col">Product SKU</th> --}}
                            <th scope="col">Purchase Price</th>
                            <th scope="col">Sale Price</th>
                            {{-- <th scope="col">Profit</th> --}}
                            {{-- <th scope="col">Profit Margin</th> --}}
                            {{-- <th scope="col">Product Category</th> --}}
                            <th scope="col">Supplier</th>
                            <th scope="col">Product Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $k => $product)
                            <tr>
                                <td scope="row">{{ $k + 1 }}</td>
                                <td scope="col">{{ $product->product_title }}</td>
                                {{-- <td scope="col">{{ $product->product_description }}</td> --}}
                                {{-- <td scope="col">{{ $product->product_sku }}</td> --}}
                                <td scope="col">{{ $product->purchase_price }}</td>
                                <td scope="col">{{ $product->sale_price }}</td>
                                {{-- <td scope="col">{{ $product->sale_price - $product->purchase_price }}</td> --}}
                                {{-- <td scope="col"> --}}
                                    {{-- {{ (($product->sale_price - $product->purchase_price) / $product->purchase_price) * 100 }}% --}}
                                </td>
                                {{-- <td scope="col">{{ $product->category->title }}</td> --}}
                                <td scope="col">{{ $product->supplier->supplier_title }}</td>
                                <td scope="col">Product Image</td>
                                <td scope="col" class="d-flex justify-content-center">
                                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-info me-1"><i
                                            class="fa-solid fa-eye"></i></a>
                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary me-1"><i
                                            class="fa-regular fa-pen-to-square"></i></a>
                                    <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="#" onclick="showConfirmation(this)" class="btn btn-danger "><i
                                                class="fa-regular fa-trash-can"></i></a>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center ">{{ __('Data Not Found') }}</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
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
@endsection
