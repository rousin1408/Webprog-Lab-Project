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
        <div class="container pl-4 pr-4" style="background-color: none">
            <div class="row pt-3" style="border-bottom: 1pt solid rgba(255, 255, 255, 0.5)">
                <h2 class="pb-2">
                   <b>Add new product</b>
                </h2>
            </div>
            <div class="row pt-3 pb-3">
                {{-- add product button --}}
                <div class="col-2">
                    <div class="input-group">
                        <button type="submit" class="btn btn-primary fw-bold shadow" style="width:100%; background-color:#757575; border:none;">Back</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    {{-- form new product --}}
                    <form style="color:white">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="name" class="form-control" id="floatingInput" placeholder="Name"
                                name="name" value="{{ old('name') }}">
                            <label for="floatingInput" style="color:black">Name</label>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        {{-- file gambar --}}
                        <div class="mb-3">
                            {{-- <label for="formFile" class="form-label">Default file input example</label> --}}
                            <input class="form-control" type="file" id="formFile">
                          </div>

                        {{-- category --}}
                        <div class="form-floating mb-3">
                            <input type="category" class="form-control" id="floatingInput" placeholder="Category"
                                name="category" value="{{ old('Category') }}">
                            <label for="floatingInput" style="color:black">Category</label>
                            @if ($errors->has('category'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        {{-- description --}}
                        <div class="form-floating mb-3">
                            <input type="description" class="form-control" id="floatingInput" placeholder="Description"
                                name="description" value="{{ old('description') }}">
                            <label for="floatingInput" style="color:black">
                                Description
                            </label>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        {{-- Price --}}
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price" value="{{ old('description') }}" placeholder="Price">
                            {{-- <span class="input-group-text">.00</span> --}}
                        </div>
                        {{-- submit --}}
                        <div class="mb-3">
                            <div class="input-group">
                                <button type="submit" class="btn btn-primary fw-bold shadow" style="width:25%; background-color:#757575; border:none;">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection
