<!-- create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>
    <button type="button" class="form-wrapper btn btn-primary btn-sm mt-2" onclick="window.history.back();">Back</button><br>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="publish">Publish</label><br>
            <input type="radio" name="publish" id="1" value="yes">
            <label for="1">Yes</label><br>
            <input type="radio" name="publish" id="2" value="no">
            <label for="1">No</label>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection