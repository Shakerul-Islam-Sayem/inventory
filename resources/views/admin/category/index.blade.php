@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <table class="table py-5">
                    <h2>Categories List</h2>
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Categroy Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $k => $category)
                            <tr>
                                {{-- <th scope="row">{{ $category->id }}</th> --}}
                                <td class="d-none d-xl-table-cell">{{ $k + 1 }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    @if ($category->status === 1)
                                        <span class="badge bg-success">Enable</span>
                                    @elseif ($category->status === 0)
                                        <span class="badge bg-danger">Disable</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="" class="btn btn-danger">DELETE</a>
                                    <a href="" class="btn btn-primary">EDIT</a>
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
