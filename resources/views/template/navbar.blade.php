<nav class="navbar navbar-expand-lg native mb-3 shadow-sm" style="background-color: #5D4037; ">
    {{-- changed max width for navbar --}}
    <div class="container-fluid" class="color:white!important;" style="max-width: 1140px">
        <a class="navbar-brand logo text-light" href="/">
            <b>
                <h1>Barbatos Shop</h1>
            </b>
        </a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="color: white">
                    Category
                </a>
                <ul class="dropdown-menu">
                    @foreach ($category as $c)
                        <li><a class="dropdown-item" href="/category/{{ $c->name }}">{{ $c->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        </ul>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav ml-auto" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if (Illuminate\Support\Facades\Auth::check() && Illuminate\Support\Facades\Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="{{ url('/manage-product') }}">Manage
                            Product</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: white">
                            {{ Illuminate\Support\Facades\Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="/profile">Profile</a>
                            </li>

                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="dropdown-item">Logout</button>
                                </form>
                            </li>


                        </ul>

                    </li>
                @elseif(Illuminate\Support\Facades\Auth::check() && Illuminate\Support\Facades\Auth::user()->role == 'user')
                    <div class="d-flex align-items-center" style="margin: 0 1vw">
                        <li class="nav-item">
                            <a href="{{ url('cart') }}">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </li>
                    </div>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: white">
                            {{ Illuminate\Support\Facades\Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/profile">Profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/history">History</a>
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="dropdown-item">Logout</button>
                                </form>
                            </li>


                        </ul>

                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="/register">
                            Register
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
