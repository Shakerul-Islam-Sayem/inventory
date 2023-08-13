@extends('layouts.admin')
@section('title')
    {{ 'Dashboard' }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <h1>Update Category</h1>
                    <form action="{{ route('category.update', $category->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" value="{{ $category->title }}" class="form-control" id="title"
                                name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control"  id="description" name="description" rows="3">{{ $category->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status">
                                <option value="1" {{ $category->status === 1 ? 'selected' : '' }}>{{ __('Active') }}</option>
                                <option value="0" {{ $category->status === 0 ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
