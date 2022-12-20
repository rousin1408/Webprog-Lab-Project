@extends('template.template')

@section('page_name', 'home')
@section('content')
    <div class="input-group " style="padding: 100px">
        <input type="search" class="form-control rounded px-2" placeholder="Search" aria-label="Search"
            aria-describedby="search-addon" />
        <button type="button" class="btn btn-outline-primary"><i class="fa fa-search"></i></button>
    </div>

    <div>
        <h1 class="index"> Category</h1>
        <div class="row" style="padding: 2rem">

            <div class="col-lg-3 col-md-4">
                <div class="card">
                    <img src="" class="card-img-top" alt="Book">
                    <div class="card-body">
                        <h6 class="card-title"></h6>
                        <p class="card-text author">By <span></span></p>
                        <a href="" class="btn btn-warning">Book Detail</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
