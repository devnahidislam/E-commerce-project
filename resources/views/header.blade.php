<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">NiN-Commerce</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('product') }}">Products</a>
          </li>
          @if(auth()->user())
          <li class="nav-item">
            <a class="nav-link" href="{{ route('addproduct') }}">Add-Products</a>
          </li>
          @endif
          <li>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </li>
        </ul>
        <ul class="navbar-nav navbar-right">
            @if(auth()->user())
              <li class="nav-item">
                <a href="#" class="nav-link mr-5 font-weight-bold bg-info">{{ auth()->user()->name }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link bg-primary text-white" style="margin-left:10px;" href="{{ route('logout') }}">Logout</a>
              </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
              </li>
            @endif
            <li>
                <a class="nav-link" href="#">Cart(0)</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
