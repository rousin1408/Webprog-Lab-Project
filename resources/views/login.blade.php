@extends('template.template')

@section('page_name', 'login')
@section('content')
    <div class="body">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h3 class="card-title text-center mb-5 fs-5">Sign In</h3>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ url('/login') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com" name="Email" value="{{ old('Email') }}">
                                    <label for="floatingInput" style="color:black">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                        name="Password"value="{{ old('Password') }}">
                                    <label for="floatingPassword" style="color:black">Password</label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="rememberPasswordCheck">
                                    <label class="form-check-label" for="rememberPasswordCheck">
                                        Remember password
                                    </label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-login text-uppercase fw-bold" style="background-color:#757575;"
                                        type="submit">Sign
                                        in</button>
                                </div>
                                <hr class="my-4">
                                <div class="text-center pt-3">Don't Have Account? <a href="{{ url('/register') }}">Register
                                        Here</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
