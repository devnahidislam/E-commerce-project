@extends('master')
@section('content')
<div class="container">
    <div class="row p-5 d-flex justify-content-center">
        <div class="col-md-4">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group my-2">
                    <label for="name" class="visually-hidden">Name:- </label>
                    <input type="text" name="name" id="name" class="form-control @error('name') border-danger @enderror" placeholder="Name" value="{{ old('name') }}" required>

                    @error('name')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="email" class="visually-hidden">Email:- </label>
                    <input type="email" name="email" id="email" class="form-control @error('email') border-danger @enderror" placeholder="Email" value="{{ old('email') }}" required>

                    @error('email')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="username" class="visually-hidden">Username:- </label>
                    <input type="text" name="username" id="username" class="form-control @error('username') border-danger @enderror" placeholder="Username" value="{{ old('username') }}" required>

                    @error('username')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="password" class="visually-hidden">Password:- </label>
                    <input type="password" name="password" id="password" class="form-control @error('password') border-danger @enderror" placeholder="Password" required>

                    @error('password')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-2">
                    <label for="password_confirmation" class="visually-hidden">Password:- </label>
                    <input type="password" name="password_confirmation" id="password" class="form-control @error('password_confirmation') border-danger @enderror" placeholder="Confirm Password">
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary my-3" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection