@extends('template.template')

@section('page_name', 'search')
@section('content')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <body style="background-color: #795548">
        {{-- search --}}
        <form action="/search" method="GET">
            <div class="container">
                <div class="input-group p-5" style="">
                    <input type="search" class="form-control rounded px-2" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-secondary" style="border-color:white">
                        <i class="fa fa-search" style="color: white"></i>
                    </button>
                </div>
            </div>
        </form>
        {{-- start looping category --}}

        <div class="container mydiv p-5">
            {{-- div buat nama category dan link untuk view all --}}
            <div class="mb-4" style="border">
                <h2>
                    <b>Search Result</b>
                </h2>
                {{-- <span style="font-weight: normal"><a href="/category/{{ $c->name }}">View All</a></span> --}}
            </div>

            <div class="row pb-5" style="border-bottom: 1px solid white">
                {{-- start looping product --}}
                @foreach ($product as $p)
                    {{-- kalau produk berasal dari category saat ini --}}
                    <div class="col-sm-3 mb-4" style="">
                        {{-- a href buat klik detail dari cardnya --}}
                        <a href="/product-detail/{{ $p->id }}"> {{-- redirect ke halaman detail produk --}}
                            <div class="thumb-wrapper" style="background-color: #9B8983; ">
                                {{-- foto --}}
                                <div class="img-box">
                                    <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/' . $p->photo) }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="thumb-content">
                                    {{-- nama --}}
                                    <h4>{{ $p->name }}</h4>
                                    {{-- harga --}}
                                    <p class="item-price">IDR{{ $p->price }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                {{-- end looping product --}}
            </div>
        </div>

        {{-- end looping category --}}


    </body>
@endsection
