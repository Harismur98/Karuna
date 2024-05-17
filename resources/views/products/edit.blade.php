@extends('layouts.app')

@section('content')
    
    <h1>Edit Product</h1>
    <button type="button" class="form-wrapper btn btn-primary btn-sm mt-2" onclick="window.history.back();">Back</button><br>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="3" required>{{ $product->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ $product->price }}" required>
        </div>

        <div class="form-group">
            <label>Publish</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="publish" id="1" value="yes" {{ $product->publish == 'yes' ? 'checked' : '' }}>
                <label class="form-check-label" for="1">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="publish" id="2" value="no" {{ $product->publish == 'no' ? 'checked' : '' }}>
                <label class="form-check-label" for="2">No</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection