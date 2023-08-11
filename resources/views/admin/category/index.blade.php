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
                        <a href="{{ route('category.create') }}" class="btn btn-info p-2 m-2"><i class="fa-solid fa-plus"></i> Add New Category</a>
                    </div>
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Categroy Title</th>
                            <th scope="col">Description</th>
                            <th scope="col" class="text-center">Status</th>
                            <th scope="col" class="text-center">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $k => $category)
                            <tr>
                                {{-- <th scope="row">{{ $category->id }}</th> --}}
                                <td class="d-none d-xl-table-cell">{{ $k + 1 }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->description }}</td>
                                <td class="text-center">
                                    @if ($category->status === 1)
                                        <span class="badge bg-success">Enable</span>
                                    @elseif ($category->status === 0)
                                        <span class="badge bg-danger">Disable</span>
                                    @endif
                                </td>
                                <td class="text-center d-flex">
                                    <a href="" class="btn btn-primary me-1"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-danger "><i class="fa-regular fa-trash-can"></i></a>
                                </td>
                            </tr>
                        @empty
                        @endforelse

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
