
@extends('master')
@section('content')
<div class="container">
    <div class="row my-4">
        <div class="col-md-6">
            <img src="/uploads/products/{{ $product['gallery'] }}" height="300px" width="400px" alt="single-product-image">
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <div class="">
                <a href="/">Go Back</a>
                <h1>{{ $product['name'] }}</h1>
                <p>Price :- {{ $product['price'] }} BDT</p>
                <p>Description :- {{ $product['description'] }}</p>
            </div>
        </div>
    </div>
</div>

@endsection
