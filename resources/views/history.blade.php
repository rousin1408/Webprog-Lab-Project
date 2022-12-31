@extends('template.template')

@section('page_name', 'History')
@section('content')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    {{-- END DATA TRANSAKSI DUMMY --}}
    @if ($HeaderTransaction->count() == 0)
        <div style="text-align: center;">
            <h3>History is Empty</h3>
        </div>
    @else
        <div class="accordion container p-4 mb-5 shadow" id="accordionPanelsStayOpenExample"
            style="background-color: rgb(93, 64, 55); color:white">
            @foreach ($HeaderTransaction as $ht)
                <div class="accordion-item"style="background-color: rgb(93, 64, 55); color:white">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne{{ $ht->id }}" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne{{ $ht->id }}"
                            style="background-color: rgb(93, 64, 55); color:white">
                            Transaction Date {{ $ht->created_at }}
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne{{ $ht->id }}" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingOne{{ $ht->id }}">
                        <div class="accordion-body">
                            <div class="row">
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
                                    @foreach ($DetailTransaction as $td)
                                        @if ($td->transaction_id == $ht->id)
                                            {{-- start looping data transaksi --}}
                                            {{-- kolom untuk nama --}}
                                            <div class="col-6">
                                                <p>
                                                    @foreach ($product as $p)
                                                        @if ($p->id == $td->product_id)
                                                            {{ $p->name }}
                                                        @break
                                                    @endif
                                                @endforeach
                                            </p>
                                        </div>
                                        {{-- kolom untuk quantity --}}
                                        <div class="col">
                                            {{ $td->quantity }}
                                        </div>
                                        {{-- kolom untuk subprice --}}
                                        <div class="col">
                                            Rp. {{ $td->total_price_all }}
                                        </div>
                                        {{-- end looping data transaksi --}}

                                        {{-- =========================================== --}}
                                    @endif
                                @endforeach


                                {{-- row total --}}
                                <div class="row">
                                    <div class="col-6">
                                        <h4>Total price</h4>
                                    </div>
                                    <div class="col">
                                        {{ $ht->total_product }}
                                    </div>
                                    {{-- harga total --}}
                                    <div class="col">
                                        <h4>Rp {{ $ht->total_price }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
@endif
</div>

</body>
@endsection
