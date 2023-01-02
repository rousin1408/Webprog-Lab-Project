@extends('template.template')

@section('page_name', 'product-detail')
@section('content')
    @if (session('message'))
        <div class="alert alert-success alert-block">
            <strong>{{ session('message') }}</strong>
        </div>
    @endif
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <div class="container" style="background-color: none">
        <div class="row pt-3 pb-3">
            {{-- search bar --}}

            <div class="col">
                <form action="{{ route('manageSearch') }}" method="GET">
                    <div class="input-group" style="">

                        <input type="search" class="form-control rounded px-2" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" name="search" />
                        <button type="button" class="btn btn-outline-secondary" style="border-color:white">
                            <i class="fa fa-search" style="color: white"></i>
                        </button>
                    </div>
                </form>
            </div>


            <div class="col">
                {{-- empty col to seperate search bar and add button --}}
            </div>
            {{-- add product button --}}
            <div class="col-3">
                <div class="input-group">
                    <a href="/manage-product/add" class="btn btn-primary fw-bold shadow"
                        style="width:100%; background-color:#757575; border:none;">Add product</a>
                </div>
            </div>
        </div>
    </div>

    {{-- start looping item disini --}}
    @foreach ($product as $p)
        {{-- start card --}}
        <div class="container p-4 shadow" style="color: white">
            <div class="row">
                {{-- kolom foto --}}
                <div class="col-3">
                    <div class="img-box" style="width: 100%;">
                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/' . $p->photo) }}" class="img-fluid"
                            alt="" style="border-radius: 15px">
                    </div>
                </div>
                <div class="col-6 mr-2" style="">
                    {{-- nama barang --}}
                    <h4 class="pb-2"style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                        <b>{{ $p->name }}</b>
                    </h4>
                    {{-- kategori --}}
                    <p>Category: {{ $p->category->name }}</p>
                    {{-- harga --}}
                    <p>Price: {{ $p->price }}</p>
                    {{-- deskripsi / detail --}}
                    <p>Description:</p>
                    <p>{{ $p->detail }}.</p>
                </div>

                {{-- box opsi --}}
                <div class="col pt-4">
                    <div class="container pt-4 pb-4" style="background-color:#795548;">
                        {{-- button qty --}}
                        <div class="row">
                            <div class="text-center" style="color: white">

                                <a href="{{ route('update', ['id' => $p->id]) }}"
                                    class="btn btn-warning btn-md center-block" style="width: 200px;padding:10px 5px; color:white"
                                    type="submit">Edit</a>
                                <div style="padding-top:30px">
                                    <form action="/manage-product/delete/{{ $p->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-md center-block"
                                            style="width: 200px;padding:10px 5px;display: inline-block!important;
                                            vertical-align: top!important;"
                                            type="submit">Delete</button>
                                    </form>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{-- end card --}}
    @endforeach
    {{-- end looping item --}}
    <div class="container shadow-none bg-transparent" style="">
            {{ $product->links() }}
    </div>


@endsection
