@extends('master')
@section('content')
    <div class="container custom-login">
        <div class="row justify-content-center">
            <div class="col-md-4 my-5">
                @if(session('status'))
                <div class="text-white text-center fw-bold mb-4 bg-danger">
                    {{ session('status') }}
                </div>
                @endif
                <form action="/login" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="visually-hidden">Email:- </label>
                        <input type="email" name="email" id="email" class="form-control @error('email') border-danger @enderror" placeholder="Email" value="{{ old('email') }}" required>

                        @error('email')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="password" class="visually-hidden">Password:- </label>
                        <input type="password" name="password" id="password" class="form-control @error('password') border-danger @enderror" placeholder="password" required>

                        @error('password')
                            <div class="text-danger mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary my-3" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
