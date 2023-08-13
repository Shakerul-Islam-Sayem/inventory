@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="container mt-5">
                    <form action="{{ route('roles.update', $role->id) }}" method="POST" id="createUserRoleForm">
                        @csrf
                        @method('put')
                        <div class="">
                            <h2 class="mb-3">{{ __('Update Existing Role') }}</h2>
                        </div>
                        <div class="mb-3">
                            <label for="roleName" class="form-label">Role Title</label>
                            <input type="text" class="form-control" id="roletile" name="title"
                                placeholder="Enter role name" value="{{ $role->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="roleDescription" class="form-label">Role Description</label>
                            <textarea class="form-control" id="roleDescription" name="description" rows="3"
                                placeholder="{{ __('Type details here ...') }}">{{ $role->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="roleStatus" class="form-label">Role Status</label>
                            <select class="form-select form-select-lg" name="status" id="rolestatus">
                                <option value="1" {{ $role->status === 1 ? 'selected' : '' }}>{{ __('Active') }}</option>
                                <option value="0" {{ $role->status === 0 ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" id="createUserRoleBtn">Update Role</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
