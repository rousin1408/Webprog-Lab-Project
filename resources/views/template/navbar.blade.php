<nav class="navbar navbar-expand-lg native mb-3 shadow-sm" style="background-color: #5D4037; ">
    {{-- changed max width for navbar --}}
    <div class="container-fluid" class="color:white!important;" style="max-width: 1140px">
        <a class="navbar-brand logo text-light" href="/">
            <b><h1>Barbatos Shop</h1></b>
        </a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" style="color: white">
                    Category
                </a>
                <ul class="dropdown-menu">
                    @foreach ($category as $category)
                        <li><a class="dropdown-item"
                                href="{{ url('category', ['name' => $category->name]) }}">{{ $category->name }}</a>
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
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="{{ url('/register') }}">
                        Register
                    </a>

                </li>

            </ul>

        </div>
    </div>
</nav>
