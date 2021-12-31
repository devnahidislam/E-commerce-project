@extends('master')
@section('content')


    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        {{-- <div class="carousel-indicators">
        @foreach ($products as $product)
        <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $product['id'] }}" class="active"></button>
        @endforeach
    </div> --}}

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            @foreach ($products as $product)
                <div class="carousel-item {{ $product['id'] == 1 ? 'active' : '' }}">
                    <a href="details/{{ $product['id'] }}">
                    <img src="uploads\products\{{ $product['gallery'] }}" alt="Products images"
                        class="d-block w-100 slider-img">
                    <div class="carousel-caption slider-text">
                        <h3>{{ $product['name'] }}</h3>
                        <p>{{ $product['description'] }}</p>
                    </div>
                    </a>
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

    <div class="container">
        <div class="row">
            <div class="products-wraper my-4">
                <div class="d-flex justify-content-center mb-4">
                    <h1>Our Products</h1>
                </div>
                @foreach ($products as $product)
                    <a href="details/{{ $product['id'] }}">
                        <div class="products bg-light m-2 p-3">
                            <div class="product-img d-flex justify-content-center">
                                <img src="uploads\products\{{ $product['gallery'] }}" alt="Products images"
                                class="product-img">
                            </div>
                            <div class="product-name d-flex justify-content-center ">
                                <h4>{{ $product['name'] }}</h4>
                            </div>
                            <div class="product-name d-flex justify-content-center ">
                                <p>Price:- {{ $product['price'] }} BDT</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center py-5">
        <h1 class="">Home Page for product.</h1>
    </div>
    <img src="{{ asset('storage/images/nahid.jpg') }}" height="300px" width="300px">
    {{-- <img src="{{ HTML::image('images/nahid.jpg)}}" alt="divimg"> --}}


@endsection
