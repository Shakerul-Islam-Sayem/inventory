@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <table class="table py-5">
                    <div class="d-flex justify-content-between my-2">
                        <h2>Categories List</h2>
                        <a href="{{ route('category.create') }}" class="btn btn-info p-2 m-2"><i class="fa-solid fa-plus"></i>
                            Add New Category</a>
                    </div>
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Categroy Title</th>
                            <th scope="col">Description</th>
                            <th scope="col" class="text-center">Status</th>
                            <th scope="col" class="">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $k => $category)
                            <tr>
                                {{-- <th scope="row">{{ $category->id }}</th> --}}
                                <td class="align-middle d-none d-xl-table-cell">{{ $k + 1 }}</td>
                                <td class="align-middle">{{ $category->title }}</td>
                                <td class="align-middle">{{ $category->description }}</td>
                                <td class="align-middle text-center">
                                    @if ($category->status === 1)
                                        <span class="badge bg-success">Enable</span>
                                    @elseif ($category->status === 0)
                                        <span class="badge bg-danger">Disable</span>
                                    @endif
                                </td>
                                <td class="align-middle text-center d-flex">
                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary me-1"><i
                                            class="fa-regular fa-pen-to-square"></i></a>
                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="#" onclick="showConfirmation(this)" class="btn btn-danger "><i
                                                class="fa-regular fa-trash-can"></i></a>
                                    </form>
                                </td>
                            </tr>
                        @empty
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
