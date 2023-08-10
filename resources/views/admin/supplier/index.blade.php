@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body py-5">
                <table class="table data-table py-1">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Supplier Title</th>
                            <th scope="col">Owner Name</th>
                            <th scope="col">Contact Person</th>
                            <th scope="col">Contact Email</th>
                            <th scope="col">Contact Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Tax ID/VAT Number</th>
                            <th scope="col">BIN Number</th>
                            <th scope="col">Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($suppliers as $k => $supplier)
                        <tr>
                            <th scope="row"class="d-none d-xl-table-cell">{{ $k + 1 }}</th>
                            <td scope="col">{{ $supplier->title }}</td>
                            <td scope="col">{{ $supplier->owner_name }}</td>
                            <td scope="col">{{ $supplier->contact_person }}</td>
                            <td scope="col">{{ $supplier->email }}</td>
                            <td scope="col">{{ $supplier->phone }}</td>
                            <td scope="col">{{ $supplier->address }}</td>
                            <td scope="col">{{ $supplier->tax }}</td>
                            <td scope="col">{{ $supplier->bin_number }}</td>
                            <td scope="col">{{ $supplier->note }}</td>
                            <td scope="col">{{ $supplier->title }}</td>
                        </tr>
                            
                        @empty
                            
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
