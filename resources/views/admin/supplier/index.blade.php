@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        @include('partials.admin.flash')
        <div class="card">
            <div class="card-body py-5">
                <div class="card-title mb-3 d-flex justify-content-between">
                    <h2 class="mb-3 text-center text-decoration-underline fw-bolder">Supplier List</h2>
                    <a href="{{ route('supplier.create') }}" class="btn btn-info ">+ Add New Supplier</a>
                </div>
                <table class="table data-table py-1">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Supplier Title</th>
                            <th scope="col">Contact Phone</th>
                            <th scope="col">Supplier Status</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($suppliers as $k => $supplier)
                            <tr>
                                <th scope="row"class="d-none d-xl-table-cell">{{ $k + 1 }}</th>
                                <td scope="col">{{ $supplier->supplier_title }}</td>
                                <td scope="col">{{ $supplier->phone }}</td>
                                <td>
                                    @if ($supplier->status === 1)
                                        <span class="badge bg-success">{{ __('Active') }}</span>
                                    @else
                                        <span class="badge bg-danger">{{ __('Inactive') }}</span>
                                    @endif
                                </td>
                                {{-- <td scope="col">{{ $supplier->address }}</td> --}}
                                {{-- <td scope="col">{{ $supplier->tax }}</td> --}}
                                {{-- <td scope="col">{{ $supplier->bin_number }}</td> --}}
                                {{-- <td scope="col">{{ $supplier->note }}</td> --}}
                                <td scope="col" class="d-flex justify-content-center">
                                    <a href="{{ route('supplier.show', $supplier->id) }}" class="btn btn-info me-1"><i
                                            class="fa-solid fa-eye"></i></a>
                                    <a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-primary me-1"><i
                                            class="fa-regular fa-pen-to-square"></i></a>
                                    <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="#" onclick="showConfirmation(this)" class="btn btn-danger "><i
                                                class="fa-regular fa-trash-can"></i></a>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="fw-bolder text-center">{{ __('No Data Found') }}</td>
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
