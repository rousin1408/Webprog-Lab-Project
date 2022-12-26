@extends('template.template')

@section('page_name', 'product-detail')
@section('content')



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <body style="">
        {{-- search bar --}}
        <div class="container" style="background-color: none">
            <div class="row pt-3 pb-3">
                <div class="col">
                    <div class="input-group" style="">
                        <input type="search" class="form-control rounded px-2" placeholder="Search" aria-label="Search"
                            aria-describedby="search-addon" />
                        <button type="button" class="btn btn-outline-secondary" style="border-color:white">
                            <i class="fa fa-search" style="color: white"></i>
                        </button>
                    </div>
                </div>
                <div class="col">

                </div>
                <div class="col-3">
                    {{-- add product button --}}
                    <div class="input-group">
                        <button type="submit" class="btn btn-primary fw-bold shadow" style="width:100%;background-color:#757575; border:none;">Add product</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- start card --}}
        {{-- nanti looping item disini --}}
        <div class="container p-4 shadow" style="color: white">
            <div class="row">
                {{-- kolom foto --}}
                <div class="col-3">
                    <div class="img-box" style="width: 100%;">
                        <img src="image/beauty1.jpg"
                            class="img-fluid" alt="" style="border-radius: 15px">
                    </div>
                </div>
                <div class="col-6 mr-2" style="">
                    {{-- nama barang --}}
                    <h4 class="pb-2"style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                       <b>Bedak Sakti</b>
                    </h4>
                    {{-- kategori --}}
                    <p>Category: Beauty</p>
                    {{-- harga --}}
                    <p>Price: Rp25.000</p>
                    {{-- deskripsi / detail --}}
                    <p>Description:</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere debitis laudantium aliquid nemo! Voluptatem alias itaque error repellat, praesentium quaerat laborum non eius sit dolore modi atque ab amet ad.</p>
                </div>

                {{-- box opsi --}}
                <div class="col pt-4">
                    <div class="container pt-4 pb-4" style="background-color:#795548">
                        {{-- button qty --}}
                        <form action="">
                            <div class="input-group mb-3">
                                {{-- button submit --}}
                                <button type="submit" class="btn btn-primary fw-bold shadow" style="width: 100%; background-color:#757575; border:none">Edit</button>
                            </div>
                            <div class="input-group">
                                {{-- button submit --}}
                                <button type="submit" class="btn btn-primary fw-bold shadow" style="width: 100%; background-color:red; border:none">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    {{-- end card --}}
    <div class="container p-4 shadow" style="color: white">
        <div class="row">
            {{-- kolom foto --}}
            <div class="col-3">
                <div class="img-box" style="width: 100%;">
                    <img src="image/beauty1.jpg"
                        class="img-fluid" alt="" style="border-radius: 15px">
                </div>
            </div>
            <div class="col-6 mr-2" style="">
                {{-- nama barang --}}
                <h4 class="pb-2"style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                   <b>Bedak Sakti</b>
                </h4>
                {{-- kategori --}}
                <p>Category: Beauty</p>
                {{-- harga --}}
                <p>Price: Rp25.000</p>
                {{-- deskripsi / detail --}}
                <p>Description:</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere debitis laudantium aliquid nemo! Voluptatem alias itaque error repellat, praesentium quaerat laborum non eius sit dolore modi atque ab amet ad.</p>
            </div>

            {{-- box opsi --}}
            <div class="col pt-4">
                <div class="container pt-4 pb-4" style="background-color:#795548">
                    {{-- button qty --}}
                    <form action="">
                        <div class="input-group mb-3">
                            {{-- button submit --}}
                            <button type="submit" class="btn btn-primary fw-bold shadow" style="width: 100%; background-color:#757575; border:none">Edit</button>
                        </div>
                        <div class="input-group">
                            {{-- button submit --}}
                            <button type="submit" class="btn btn-primary fw-bold shadow" style="width: 100%; background-color:red; border:none">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-4 shadow" style="color: white">
        <div class="row">
            {{-- kolom foto --}}
            <div class="col-3">
                <div class="img-box" style="width: 100%;">
                    <img src="image/beauty1.jpg"
                        class="img-fluid" alt="" style="border-radius: 15px">
                </div>
            </div>
            <div class="col-6 mr-2" style="">
                {{-- nama barang --}}
                <h4 class="pb-2"style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                   <b>Bedak Sakti</b>
                </h4>
                {{-- kategori --}}
                <p>Category: Beauty</p>
                {{-- harga --}}
                <p>Price: Rp25.000</p>
                {{-- deskripsi / detail --}}
                <p>Description:</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere debitis laudantium aliquid nemo! Voluptatem alias itaque error repellat, praesentium quaerat laborum non eius sit dolore modi atque ab amet ad.</p>
            </div>

            {{-- box opsi --}}
            <div class="col pt-4">
                <div class="container pt-4 pb-4" style="background-color:#795548">
                    {{-- button qty --}}
                    <form action="">
                        <div class="input-group mb-3">
                            {{-- button submit --}}
                            <button type="submit" class="btn btn-primary fw-bold shadow" style="width: 100%; background-color:#757575; border:none">Edit</button>
                        </div>
                        <div class="input-group">
                            {{-- button submit --}}
                            <button type="submit" class="btn btn-primary fw-bold shadow" style="width: 100%; background-color:red; border:none">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
