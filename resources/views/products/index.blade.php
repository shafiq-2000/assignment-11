@extends('layouts.app')  {{}}

@section('content')

<div class="container">
    <h2>Product List</h2>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->quantity }}</td>
                <td>${{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.sell', ['id' => $product->id]) }}">Sell</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
