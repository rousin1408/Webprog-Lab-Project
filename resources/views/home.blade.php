@extends('template.template')

@section('page_name', 'home')
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
                        aria-describedby="search-addon" name="search" />
                    <button type="submit" class="btn btn-outline-secondary" style="border-color:white">
                        <i class="fa fa-search" style="color: white"></i>
                    </button>
                </div>
            </div>
        </form>
        {{-- start looping category --}}
        @foreach ($category as $c)
            <div class="container mydiv p-5">
                {{-- div buat nama category dan link untuk view all --}}
                <div class="mb-4" style="border">
                    <h2>
                        <b>{{ $c->name }}</b>
                    </h2>
                    <span style="font-weight: normal"><a href="/category/{{ $c->name }}">View All</a></span>
                </div>

                <div class="row pb-5" style="border-bottom: 1px solid white">
                    {{-- start looping product --}}
                    @foreach ($product as $p)
                        {{-- kalau produk berasal dari category saat ini --}}
                        @if ($c->id == $p->category_id)
                            <div class="col-sm-3 mb-4" style="">
                                {{-- a href buat klik detail dari cardnya --}}
                                <a href="/product-detail/{{ $p->id }}"> {{-- redirect ke halaman detail produk --}}
                                    <div class="thumb-wrapper" style="background-color: #9B8983; ">
                                        {{-- foto --}}
                                        <div class="img-box">
                                            <img src="{{ \Illuminate\Support\Facades\URL::asset('image/' . $p->photo) }}"
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
                        @endif
                    @endforeach
                    {{-- end looping product --}}
                </div>
            </div>
        @endforeach
        {{-- end looping category --}}

        {{-- <div class="container mydiv">
            <h2><b>Camera</b></h2>
            <div class="row">
                @foreach ($product as $product)
                    <div class="col-sm-3" style="padding-bottom:100px;">

                        <div class="thumb-wrapper" style="background-color: #9B8983; ">

                            <div class="img-box">
                                <img src="{{ \Illuminate\Support\Facades\URL::asset('image/beauty/' $product->photo) }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="thumb-content">
                                <h4>Apple iPad</h4>

                                <p class="item-price"><strike>$400.00</strike> <b>$369.00</b></p>

                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div> --}}
    </body>
@endsection
