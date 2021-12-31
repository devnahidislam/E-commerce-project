
@extends('master')
@section('content')


<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        @foreach ($products as $product)
        <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $product['id'] }}" class="active"></button>
        @endforeach
      {{-- <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button> --}}
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        @foreach ($products as $product)
            <div class="carousel-item {{ $product['id']==1?'active':'' }}">
                <img src="uploads\products\{{ $product['gallery'] }}" alt="Los Angeles" class="d-block w-100 slider-img">
                <div class="carousel-caption slider-text">
                    <h3>{{ $product['name'] }}</h3>
                    <p>{{ $product['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <div class="d-flex justify-content-center py-5">
    <h1 class="">Product page</h1>
  </div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="uploads\products\{{ $product['gallery'] }}" class="single-product-img" alt="pic">
            <h2>{{ $product['name'] }}</h2>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>


@endsection
