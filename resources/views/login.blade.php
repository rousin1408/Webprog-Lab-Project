@extends('template.template')

@section('page_name', 'login')

@section('content')
    <div class="body">
        {{-- uncomment div di bawah ini untuk memunculkan background coklat gelap, uncomment juga closure tag di paling bawah --}}
        {{-- <div class="container"> --}}
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h3 class="card-title text-center mb-5 fs-5">Sign In</h3>
                            <form action="{{ url('/login-validation') }}" method="POST">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" name="email"
                                        value="{{ Cookie::get('username') ? Cookie::get('username') : old('email') }}"
                                        placeholder="name@example.com" required>
                                    <label for="floatingInput" style="color:black">Email</label>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="passwords"
                                        value="{{ Cookie::get('password') ? Cookie::get('password') : '' }}"
                                        name="passwords" placeholder="Password" required>
                                    <label for="pass" style="color:black">Password</label>

                                    @if ($errors->has('passwords'))
                                        <span class="text-danger">{{ $errors->first('passwords') }}</span>
                                    @endif
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
        {{-- uncomment div di bawah ini --}}
        {{-- </div> --}}
    </div>


@endsection
