@extends('template.template')

@section('page_name', 'cart')
@section('content')
    @if (session()->has('message'))
        @foreach (explode('-', session('message')) as $message)
            <script>
                Swal.fire('{{ $message }}')
            </script>
        @endforeach
    @endif
    <?php
    $total = 0;
    ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>




    <div class="container" style="background-color: rgb(121, 85, 72)">
        <div class="row" style="">
            <div class="col" style="">
                {{-- start looping item disini --}}
                @if (!$cart)
                    <div style="text-align: center; color:white">
                        <h3>Cart is Empty</h3>
                    </div>
                @else
                    @foreach ($cart as $c)
                        {{-- start card --}}
                        <div class="container p-4 shadow" style="color: white;">
                            <div class="row">
                                {{-- kolom foto --}}
                                <div class="col-3">
                                    <div class="img-box" style="width: 100%;">
                                        <img src="{{ \Illuminate\Support\Facades\URL::asset('storage/' . $c['photo']) }}"
                                            class="img-fluid" alt="" style="border-radius: 15px">
                                    </div>
                                </div>
                                <div class="col-8 mr-2" style="">
                                    {{-- nama barang --}}
                                    <h4 class="pb-2"style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                                        <b>{{ $c['name'] }}</b>
                                    </h4>
                                    {{-- harga --}}
                                    <p><b>Price:</b> Rp{{ $c['price'] }}</p>
                                    {{-- Qty --}}
                                    <p><b>Quantity:</b> {{ $c['quantity'] }}</p>
                                    {{-- subprice    --}}
                                    <p><b>Subprice:</b> Rp{{ $c['quantity'] * $c['price'] }}</p>
                                    <?php
                                    $total = $total + $c['quantity'] * $c['price'];
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    {{-- empty col --}}
                                </div>
                                <div class="col">
                                    <form action="">
                                        <div class="input-group">
                                            {{-- button delete --}}
                                            <a href="/cart/delete/{{ $c['id'] }}"
                                                class="btn btn-primary fw-bold shadow"
                                                style="width:100%; background-color:red; border:none">Delete</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- end card --}}
                    @endforeach
                    {{-- end looping item --}}
            </div>
            <div class="col-4">
                {{-- ringkasan belanja --}}
                <div class="container sticky-top pt-3 pb-3" style="color: white">
                    <h3 class="fw-bold pb-2 mb-4" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                        Shopping summary
                    </h3>

                    <h5 class="fw-bold mb-4">
                        Total price: Rp{{ $total }}
                    </h5>

                    <form action="/purchase" method="post">
                        @csrf
                        <div class="input-group">
                            {{-- button submit --}}
                            <button type="submit" class="btn btn-primary fw-bold shadow"
                                style="width: 100%; background-color:green; border:none">Purchase</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    @endif
@endsection
