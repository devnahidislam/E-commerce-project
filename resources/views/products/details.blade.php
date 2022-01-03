
@extends('master')
@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-md-6">
            <img src="/uploads/products/{{ $product['gallery'] }}" height="300px" width="400px" alt="single-product-image">
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <div class="single-product">
                <a href="/">Go Back</a>
                <h1>{{ $product['name'] }}</h1>
                <p>Price :- {{ $product['price'] }} BDT</p>
                <p>Description :- {{ $product->description }}</p>
                <p>Category :- {{ $product['category'] }}</p>
                <div class="buttons">
                    <form action="{{ route('cart.store') }}" method="POST" style="display:inline;">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->description }}" name="description">
                        <input type="hidden" value="{{ $product->gallery }}"  name="gallery">
                        <input type="hidden" value="1" name="quantity">
                        <button class="btn btn-primary btn-sm">Add to cart</button>
                    </form>
                    <button type="button" class="btn btn-success btn-sm">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
