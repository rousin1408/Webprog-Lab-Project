@extends('template.template')

@section('page_name', 'category')
@section('content')



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <body style="background-color: #795548">
        {{-- search --}}
        <div class="container">
            <div class="input-group p-5" style="">
                <input type="search" class="form-control rounded px-2" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" />
                <button type="button" class="btn btn-outline-secondary" style="border-color:white">
                    <i class="fa fa-search" style="color: white"></i>
                </button>
            </div>
        </div>

        <div class="container mydiv p-5">

            {{-- div buat nama category dan link untuk view all --}}
            {{-- <div class="mb-4" style="border">
                <h2>
                    <b>{{ $category->name }}</b>
                </h2>
            </div> --}}

            <div class="row pb-5" style="border-bottom: 1px solid white">
                {{-- @foreach ($product as $p) --}}
                <div class="col-sm-3 mb-4" style="">
                    {{-- a href buat klik detail dari cardnya --}}
                    <a href="product-detail"> {{-- redirect ke halaman detail produk --}}
                        <div class="thumb-wrapper" style="background-color: #9B8983; ">

                            <div class="img-box">
                                {{-- <img src="{{ \Illuminate\Support\Facades\URL::asset('image/' . $p->photo) }}"
                                        class="img-fluid" alt=""> --}}
                            </div>
                            <div class="thumb-content">
                                {{-- <h4>{{ $p->name }}</h4> --}}

                                {{-- <p class="item-price">IDR{{ $p->price }}</p> --}}

                            </div>
                        </div>
                    </a>
                </div>
                {{-- @endforeach --}}



            </div>
        </div>


        </div>

        </div>

    </body>
@endsection
