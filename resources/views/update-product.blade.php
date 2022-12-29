@extends('template.template')

@section('page_name', 'Update')
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
                    <b>Update Product</b>
                </h2>
            </div>
            <div class="row pt-3 pb-3">
                {{-- add product button --}}
                <div class="col-2">
                    <div class="input-group">
                        <a href="/manage-product" class="btn btn-primary fw-bold shadow"
                            style="width:100%; background-color:#757575; border:none;">Back</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    {{-- form update product --}}
                    <form action="/manage-product/updated/{{ $product->id }}" method="POST"
                        style="color:white"enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="name" class="form-control" id="floatingInput" placeholder="Name" name="name"
                                value="{{ old('name', $product->name) }}">
                            <label for="floatingInput" style="color:black">Name</label>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ old('name', $product->name) }}</span>
                            @endif
                        </div>
                        {{-- file gambar --}}
                        <div class="mb-3">
                            <input class="form-control" type="file" id="formFile" name="photo">
                            @if ($errors->has('photo'))
                                <span class="text-danger">{{ $errors->first('photo') }}</span>
                            @endif
                        </div>

                        {{-- category --}}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Category</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="category">
                                <option selected>No Category Choose</option>
                                @foreach ($category as $c)
                                    @if (old('category') != '')
                                        @if (old('category') == $c->id)
                                            <option value="{{ $c->id }}" selected> {{ $c->name }} </option>
                                        @else
                                            <option value="{{ $c->id }}"> {{ $c->name }} </option>
                                        @endif
                                    @else
                                        @if ($product->category_id == $c->id)
                                            <option value="{{ $c->id }}" selected> {{ $c->name }} </option>
                                        @else
                                            <option value="{{ $c->id }}"> {{ $c->name }} </option>
                                        @endif
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        {{-- detail --}}
                        <div class="form-floating mb-3">

                            <textarea class="form-control" id="floatingInput" rows="7" name="detail">{{ old('detail', $product->detail) }}</textarea>
                            <label for="floatingInput" style="color:black">Detail</label>
                            @if ($errors->has('detail'))
                                <span class="text-danger">{{ old('detail', $product->detail) }}</span>
                            @endif
                        </div>
                        {{-- Price --}}
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"
                                name="price" value="{{ old('price', $product->price) }}" placeholder="Price">
                            {{-- <span class="input-group-text">.00</span> --}}
                        </div>
                        {{-- submit --}}
                        <div class="mb-3">
                            <div class="input-group">
                                <button type="submit" class="btn btn-primary fw-bold shadow"
                                    style="width:25%; background-color:#757575; border:none;">Update</button>
                                <input type="hidden" name="photos" value="{{ $product->photo }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection
