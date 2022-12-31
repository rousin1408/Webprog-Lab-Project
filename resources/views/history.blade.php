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
        {{-- start loop per transaksi --}}
        <div class="container p-4 mb-5 shadow" style="background-color: rgb(93, 64, 55); color:white">
            <div class="row" style="">
                {{-- Judul transaksi berdasarkan tanggal --}}
                <div class="mb-3" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                    {{-- tanggalnya pakai transaction date --}}
                    <h4 class="fw-bold">Transaction Date : tanggal</h4>
                </div>

                {{-- start nama header --}}
                <div class="row" >
                    <div class="col-6">
                        <div class="" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                            <h5 class="fw-bold">
                                Name
                            </h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                            <h5 class="fw-bold">
                                Quantity
                            </h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                            <h5 class="fw-bold">
                                Subprice
                            </h5>
                        </div>
                    </div>
                </div>
                {{-- end nama header --}}

                <div class="mb-3">
                    <div class="row" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                        {{-- start looping data transaksi --}}
                        {{-- kolom untuk nama --}}
                        <div class="col-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates aspernatur molestiae minima ipsa rerum aliquam? Repudiandae iusto culpa fuga accusantium accusamus laborum molestias maiores, adipisci sint consectetur nisi rerum quos?</p>
                        </div>
                        {{-- kolom untuk quantity --}}
                        <div class="col">
                            15
                        </div>
                        {{-- kolom untuk subprice --}}
                        <div class="col">
                            Rp.50
                        </div>
                        {{-- end looping data transaksi --}}

                        {{-- =========================================== --}}
                        {{-- START DATA DUMMY --}}
                        {{-- kolom untuk nama --}}
                        <div class="col-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates aspernatur molestiae minima ipsa rerum aliquam? Repudiandae iusto culpa fuga accusantium accusamus laborum molestias maiores, adipisci sint consectetur nisi rerum quos?</p>
                        </div>
                        <div class="col">
                            15
                        </div>
                        <div class="col">
                            Rp.50
                        </div>
                        <div class="col-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates aspernatur molestiae minima ipsa rerum aliquam? Repudiandae iusto culpa fuga accusantium accusamus laborum molestias maiores, adipisci sint consectetur nisi rerum quos?</p>
                        </div>
                        <div class="col">
                            15
                        </div>
                        <div class="col">
                            Rp.50
                        </div>
                        {{-- =========================================== --}}
                        {{-- END DATA DUMMY --}}

                    </div>
                    {{-- end loop per item --}}
                </div>

                {{-- row total --}}
                <div class="row">
                    <div class="col-6">
                        <h4>Total price</h4>
                    </div>
                    <div class="col">
                        {{-- empty col --}}
                    </div>
                    {{-- harga total --}}
                    <div class="col">
                        <h4>Rp100.000</h4>
                    </div>
                </div>
            </div>
        </div>
        {{-- end loop per transaksi --}}

        {{-- START DATA DUMMY TRANSAKSI --}}
        <div class="container p-4 mb-5 shadow" style="background-color: rgb(93, 64, 55); color:white">
            <div class="row" style="">
                <div class="mb-3" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                    <h4 class="fw-bold">Transaction Date : tanggal</h4>
                </div>

                <div class="row" >
                    <div class="col-6">
                        <div class="" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                            <h5 class="fw-bold">
                                Name
                            </h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                            <h5 class="fw-bold">
                                Quantity
                            </h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                            <h5 class="fw-bold">
                                Subprice
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="row" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                        <div class="col-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates aspernatur molestiae minima ipsa rerum aliquam? Repudiandae iusto culpa fuga accusantium accusamus laborum molestias maiores, adipisci sint consectetur nisi rerum quos?</p>
                        </div>
                        <div class="col">
                            15
                        </div>
                        <div class="col">
                            Rp.50
                        </div>

                        <div class="col-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates aspernatur molestiae minima ipsa rerum aliquam? Repudiandae iusto culpa fuga accusantium accusamus laborum molestias maiores, adipisci sint consectetur nisi rerum quos?</p>
                        </div>
                        <div class="col">
                            15
                        </div>
                        <div class="col">
                            Rp.50
                        </div>
                        <div class="col-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates aspernatur molestiae minima ipsa rerum aliquam? Repudiandae iusto culpa fuga accusantium accusamus laborum molestias maiores, adipisci sint consectetur nisi rerum quos?</p>
                        </div>
                        <div class="col">
                            15
                        </div>
                        <div class="col">
                            Rp.50
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <h4>Total price</h4>
                    </div>
                    <div class="col">
                    </div>
                    <div class="col">
                        <h4>Rp100.000</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container p-4 mb-5 shadow" style="background-color: rgb(93, 64, 55); color:white">
            <div class="row" style="">
                <div class="mb-3" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                    <h4 class="fw-bold">Transaction Date : tanggal</h4>
                </div>
                <div class="row" >
                    <div class="col-6">
                        <div class="" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                            <h5 class="fw-bold">
                                Name
                            </h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                            <h5 class="fw-bold">
                                Quantity
                            </h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                            <h5 class="fw-bold">
                                Subprice
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="row" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">

                        <div class="col-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates aspernatur molestiae minima ipsa rerum aliquam? Repudiandae iusto culpa fuga accusantium accusamus laborum molestias maiores, adipisci sint consectetur nisi rerum quos?</p>
                        </div>
                        <div class="col">
                            15
                        </div>
                        <div class="col">
                            Rp.50
                        </div>

                        <div class="col-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates aspernatur molestiae minima ipsa rerum aliquam? Repudiandae iusto culpa fuga accusantium accusamus laborum molestias maiores, adipisci sint consectetur nisi rerum quos?</p>
                        </div>
                        <div class="col">
                            15
                        </div>
                        <div class="col">
                            Rp.50
                        </div>
                        <div class="col-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates aspernatur molestiae minima ipsa rerum aliquam? Repudiandae iusto culpa fuga accusantium accusamus laborum molestias maiores, adipisci sint consectetur nisi rerum quos?</p>
                        </div>
                        <div class="col">
                            15
                        </div>
                        <div class="col">
                            Rp.50
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h4>Total price</h4>
                    </div>
                    <div class="col">
                    </div>
                    <div class="col">
                        <h4>Rp100.000</h4>
                    </div>
                </div>
            </div>
        </div>
        {{-- END DATA TRANSAKSI DUMMY --}}

    </body>
@endsection
