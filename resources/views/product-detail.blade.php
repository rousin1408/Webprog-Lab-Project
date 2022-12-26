@extends('template.template')

@section('page_name', 'product-detail')
@section('content')



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <body style="background-color: #795548">
        {{-- start card --}}
        <div class="container p-4 pb-5 shadow" style="color: white">
            <div class="row mb-3">
                <div class="col">
                    {{-- nama --}}
                    <h2>
                        <b>{{ $product->name }}</b>
                    </h2>
                </div>
            </div>
            <div class="row">
                {{-- foto --}}
                <div class="col-4">
                    <div class="img-box" style="width: 100%;">
                        <img src={{ asset('image/' . $product->photo) }} class="img-fluid" alt=""
                            style="border-radius: 15px">
                    </div>
                </div>
                <div class="col-5 mr-2" style="">
                    <h3 class="pb-2"style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                        <b>Details</b>
                    </h3>
                    {{-- kategori --}}
                    <p>Category: {{ $product->category }}</p>
                    {{-- deskripsi / detail --}}
                    <p>Description:</p>
                    <p>{{ $product->detail }}</p>
                </div>

                <div class="col">
                    {{-- box buat beli barang --}}
                    <div class="container pt-5 pb-5 shadow" style="background-color:#795548">

                        {{-- harga --}}
                        <h4 class="mb-4">
                            <b>Price: Rp.{{ $product->price }}</b>
                        </h4>
                        {{-- button qty --}}
                        <form action="">
                            <div class="input-group mb-3">
                                <h6 class="mr-3">Quantity:</h6>
                                {{-- button minus --}}
                                <button class="btn btn-sm btn-outline-secondary" type="button"
                                    style="color: white; background-color:#757575">-</button>
                                {{-- text quantity --}}
                                <input type="text" class="form-control  form-control-sm" placeholder="0"
                                    aria-label="Example text with two button addons" style="text-align: center">
                                {{-- button plus --}}
                                <button class="btn btn-sm btn-outline-secondary" type="button"
                                    style="background-color:#757575; color:white">+</button>
                            </div>
                            <div class="input-group">
                                {{-- button submit --}}
                                <button type="submit" class="btn btn-primary mb-3 fw-bold shadow"
                                    style="width: 100%; background-color:#757575; border:none">Add to cart</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- end card --}}
    </body>
@endsection
