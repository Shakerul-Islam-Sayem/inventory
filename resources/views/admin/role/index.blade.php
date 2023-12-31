@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        @include('partials.admin.flash')
        <div class="card">
            <div class="card-body">
                <div class="container rounded">
                    <div class=" card-header ps-0 bg-white mb-3 d-flex justify-content-between">
                        <h2 class="mb-3 text-center text-decoration-underline fw-bolder">User Roles</h2>
                        <a href="{{ route('roles.create') }}" class="btn btn-info "> <i class="fas fa-plus"></i> Add New Role</a>
                    </div>
                    <table class="table table-striped table-hover table-responsive">
                        <thead>
                            <tr class="table-dark">
                                <th>SL</th>
                                <th>Role Title</th>
                                <th>Role Description</th>
                                <th>Role Status</th>
                                <th class="justify-content-center text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $role->title }}</td>
                                    <td>{{ $role->description }}</td>
                                    {{-- <td>{{ $role->status == 1 ? '<span class="badge bg-success">{{ __('Active') }}</span>' : ' <span class="badge bg-danger">{{ __('Deactive') }}</span>' }}</td> --}}
                                    <td>
                                        @if ($role->status === 1)
                                            <span class="badge bg-success">{{ __('Active') }}</span>
                                        @else
                                            <span class="badge bg-danger">{{ __('Inactive') }}</span>
                                        @endif

                                    </td>
                                    <td class="d-flex justify-content-center">
                                        <a href="{{ route('roles.edit', $role->id) }}"
                                            class="btn btn-outline-primary me-1">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="#" class="btn btn-outline-danger"
                                                onclick="showConfirmation(event, this)">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                                {{-- @empty
                                <tr>
                                    <td colspan="6" class="text-center"> No data found  </td>
                                </tr> --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function showConfirmation(e, t) {
            e.preventDefault();
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
                    setTimeout(function() {
                        t.closest('form').submit();
                    }, 1);
                }
            });
        }

    </script>
@endsection
