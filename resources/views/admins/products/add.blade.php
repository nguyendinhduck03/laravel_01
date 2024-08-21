@extends('layout.admin')
@section('content')
<h2>Thêm sản phẩm mới</h2>
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" @error('name')
            is-invalid
        @enderror  value="{{old('name')}}">
        @error('name')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="images" class="form-label">Images</label>
        <input type="file" class="form-control" name="images[]" multiple @error('images')
            is-invalid
        @enderror>
        @error('images')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input type="number" class="form-control" name="quantity" @error('quantity')
            is-invalid
        @enderror value="{{old('quantity')}}">
        @error('quantity')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" name="price" @error('price')
            is-invalid
        @enderror step="0.01" value="{{old('price')}}">
        @error('price')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="day_add">Day Add</label>
        <input type="date" class="form-control" name="day_add" @error('day_add')
            is-invalid
        @enderror value="{{old('day_add')}}">
        @error('day_add')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" rows="3" @error('description') is-valid @enderror>{{old('description')}}</textarea>
        @error('description')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="category">Category</label>
        <select class="form-control" name="category_id" @error('category_id') is-valid @enderror>
            <option value="" selected>Choose...</option>
            @foreach ($categories as $id => $name)
                <option value="{{$id}}" {{old('category_id') == $id ? 'selected' : ''}}>{{$name}}</option>
            @endforeach
        </select>
        @error('category_id')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Thêm</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
</form>
@endsection