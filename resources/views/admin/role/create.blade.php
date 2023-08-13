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
                    <form action="{{route('roles.store')}}" method="POST" id="createUserRoleForm" onsubmit="handleFormSubmission(event)">
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
                                <option selected value="1">Active</option>
                                <option value="0">Deactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" id="createUserRoleBtn">Create Role</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
<script>
    function deleteRole(e, t) {
      e.preventDefault();
      let c = confirm("Are you sure?");
      if (!c) return;
      t.closest('form').submit();
    }
  </script>

  <script>
  function handleFormSubmission(event) {
      event.preventDefault(); // Prevent default form submission
  
      // Simulate successful form submission
      setTimeout(function() {
          Swal.fire({
              title: 'Role Created',
              text: 'The role has been created successfully.',
              icon: 'success'
          });
      }, 1000); // Delay to simulate server response time
  
      // Clear form inputs (optional)
      document.getElementById('createUserRoleForm').reset();
  }
  </script>
  
@endsection
