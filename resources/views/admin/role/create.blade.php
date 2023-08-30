@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="container mt-5">
                    <h2 class="mb-3 text-center text-decoration-underline fw-bolder">Create User Role</h2>
                    <form action="{{route('roles.store')}}" method="POST" id="createUserRoleForm" onsubmit="handleFormSubmission(event, this)">
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
{{-- <script>
    function deleteRole(e, t) {
      e.preventDefault();
      let c = confirm("Are you sure?");
      if (!c) return;
      t.closest('form').submit();
    }
  </script> --}}
  <script>
  function handleFormSubmission(event, t) {
      event.preventDefault();

      Swal.fire({
          title: 'Are you sure?',
          text: 'This action is irreversible!',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#6c757d',
          confirmButtonText: 'Yes, create role'
      }).then((result) => {
          if (result.isConfirmed) {
              t.closest('form').submit();
          }
      });
  }
  </script>



@endsection
