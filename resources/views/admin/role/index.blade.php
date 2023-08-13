@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="container mt-5">
                    <h2>User Roles</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Role Title</th>
                                <th>Role Description</th>
                                <th>Role Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $role->title }}</td>
                                    <td>{{ $role->description }}</td>
                                    <td>{{ $role->status == 1 ? 'Active' : 'Inactive' }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center"> No data found  </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
