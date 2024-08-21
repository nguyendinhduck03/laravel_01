@extends('layout.admin')
@section('content')
<h2>Add new category</h2>
<form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" @error('name') is-invalid @enderror value="{{ old('name') }}">
        @error('name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" name="image" @error('image') is-invalid @enderror>
        @error('image')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" rows="3" @error('description') is-invalid @enderror>{{ old('description') }}</textarea>
        @error('description')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Thêm</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</form>
@endsection
