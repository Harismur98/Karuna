<!-- index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    <div class="form-wrapper">
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Create Product</a>
        <form action="{{ route('products.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control-sm" placeholder="Search products..." value="{{ $searchTerm ?? '' }}">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary btn-sm">Search</button>
                </div>
            </div>
        </form>
    </div>
    

    @if ($searchTerm)
        <p>Showing results for "{{ $searchTerm }}"</p>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Publish</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>${{ $product->price }}</td>
                    <td>{{ $product->publish }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-secondary">Show</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ route('products.delete', $product->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection