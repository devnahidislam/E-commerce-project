@extends('master')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 py-2">
                <h1 class="text-center font-weight-bold">Cart List</h1>

                @if ($message = Session::get('success'))
                    <div class="p-2 bg-info">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <table class="table table-striped table-bordered" cellspacing="0" cellpadding="2px">
                    <thead>
                        <tr>
                            <th class="hidden"></th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--Static Data for test Table-->
                    <!--
                        <tr>
                            <td>
                                <a href="#">
                                    <img src="\uploads\products\1640883286.png" alt="Products images" height="100px" width="100px"
                                        class="product-img ">
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    Image
                                </a>
                            </td>
                            <td class="text-center">
                                <div class="quantity">
                                    <form action="#" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="2">
                                        <input type="number" name="quantity" value="5"
                                            class="text-center " />
                                        <button type="submit" name="update">Update Cart</button>
                                    </form>
                                </div>
                            </td>
                            <td>
                                <p>20</p>
                            </td>
                            <td>
                                <form action="{{ route('cart.remove') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="2" name="id">
                                    <button class="text-white bg-danger">x</button>
                                </form>
                            </td>
                        </tr>
                    -->
                        @foreach ($cartItems as $item)
                            <tr>
                                <td>
                                    <a href="#">
                                        <img src="\uploads\products\{{ $item->gallery }}" height="100px" width="100px" alt="Products images"
                                            class="product-img">
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        {{ $item->name }}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <div class="quantity">
                                        <form action="{{ route(cart . update) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <input type="number" name="quantity" value="{{ $item->quantity }}"
                                                class="text-center " />
                                            <button type="submit" name="update">Update Cart</button>
                                        </form>
                                    </div>
                                </td>
                                <td>
                                    <p>{{ $item->price }}</p>
                                </td>
                                <td>
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                        <button class="text-white bg-danger">x</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div>
                <p>Total: ${{ Cart::getTotal() }}</p>
            </div>
            <div>
                <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    <button class="px-4 py-2 bg-primary border-primary mt-3">Remove All Cart</button>
                </form>
            </div>
        </div>
    </div>
@endsection
