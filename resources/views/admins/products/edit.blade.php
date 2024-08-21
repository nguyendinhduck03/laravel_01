@extends('layout.admin')
@section('content')
    <h2>Chỉnh sửa sản phẩm</h2>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" @error('name') is-invalid @enderror
                value="{{ $product->name }}">
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="images" class="form-label">Image Products</label>
            <div class="d-flex flex-wrap">
                @if ($product->imageproduct->isNotEmpty())
                    @foreach ($product->imageproduct as $image)
                        @if ($image->link)
                            <img src="{{ Storage::url($image->link) }}" alt="Product Image" class="img-thumbnail" style="width: 100px; height: auto; margin-right: 10px;">
                        @endif
                    @endforeach
                @else
                    <p class="text-muted">No image available</p>
                @endif
            </div>
        </div>

        <div class="form-group">
            <input type="file" id="change-images" class="form-control-file d-none" name="images[]" multiple
                onchange="displaySelectedImages()">
            <label for="change-images" class="btn btn-success text-white">Change</label>
            <div id="selected-images" class="d-flex flex-wrap mt-2"></div>
            @error('images')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>



        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" name="quantity" @error('quantity') is-invalid @enderror
                value="{{ $product->quantity }}">
            @error('quantity')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price" @error('price') is-invalid @enderror step="0.01"
                value="{{ $product->price }}">
            @error('price')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="day_add">Day Add</label>
            <input type="date" class="form-control" name="day_add" @error('day_add') is-invalid @enderror
                value="{{ $product->day_add }}">
            @error('day_add')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="3" @error('description') is-invalid @enderror>{{ $product->description }}</textarea>
            @error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" name="category_id" @error('category_id') is-invalid @enderror>
                <option value="" disabled>Choose...</option>
                @foreach ($categories as $id => $name)
                    <option value="{{ $id }}" {{ $product->category_id == $id ? 'selected' : '' }}>
                        {{ $name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
    <script src="{{ asset('assets/admin/js/app.js') }}"></script>

@endsection
