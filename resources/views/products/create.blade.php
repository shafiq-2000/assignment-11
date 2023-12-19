@extends('layouts.app')  {{}}

@section('content')

<div class="container">
    <h2>Add New Product</h2>

    <form action="{{ route('products.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" class="form-control" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>

@endsection
