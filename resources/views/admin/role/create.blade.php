@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="container mt-5">
                    <h2>Create User Role</h2>
                    <form action="" method="POST" id="createUserRoleForm">
                        @csrf
                        <div class="mb-3">
                            <label for="roleName" class="form-label">Role Title</label>
                            <input type="text" class="form-control" id="roletile" name="title"
                                placeholder="Enter role name">
                        </div>
                        <div class="mb-3">
                            <label for="roleDescription" class="form-label">Role Description</label>
                            <textarea class="form-control" id="roleDescription" name="description" rows="3"
                                placeholder="Enter role description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="roleStatus" class="form-label">Role Status</label>
                            <select class="form-select form-select-lg" name="status" id="rolestatus">
                                <option selected disabled>Select one</option>
                                <option value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-primary" id="createUserRoleBtn">Create Role</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
