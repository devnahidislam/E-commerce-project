
@extends('master')
@section('content')

<div class="container">
    <div class="row p-5 d-flex justify-content-center">
        <div class="col-md-4">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <h1>Add Products:-</h1>
            <form action="{{ route('addproduct') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group my-2">
                    <label for="name" class="visually-hidden">Product Name:- </label>
                    <input type="text" name="name" id="name" class="form-control @error('name') border-danger @enderror" placeholder="Products Name" value="{{ old('name') }}" required>

                    @error('name')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="price" class="visually-hidden">Product Price:- </label>
                    <input type="text" name="price" id="price" class="form-control @error('price') border-danger @enderror" placeholder="Products Price" value="{{ old('price') }}" required>

                    @error('price')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="category" class="visually-hidden">Product Category:- </label>
                    <input type="text" name="category" id="category" class="form-control @error('category') border-danger @enderror" placeholder="Product Category" value="{{ old('category') }}" required>

                    @error('category')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="description" class="visually-hidden">Product Description:- </label>
                    <textarea rows="3" name="description" id="description" class="form-control
                    @error('description') border-danger @enderror"
                    placeholder="Products Description" value="{{ old('description') }}" required></textarea>

                    @error('description')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="galleryimg" class="visually-hidden">Select a file:</label>
                    <input type="file" name="galleryimg" id="myfile" class="form-control @error('galleryimg') border-danger @enderror">

                    @error('galleryimg')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-grid">
                    <button class="btn btn-primary my-3" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
