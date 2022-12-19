@extends('template.template')

@section('page_name', 'register')
@section('content')
    <div class="body">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <h3 class="card-title text-center mb-5 fs-5">Register</h3>
                            <form action="{{ '/register' }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="name" class="form-control" id="floatingInput" placeholder="name"
                                        name="Name" value="{{ old('Name') }}">
                                    <label for="floatingInput" style="color:black">Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" name="Email"
                                        value="{{ old('Email') }}" placeholder="name@example.com">
                                    <label for="floatingInput" style="color:black">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword" name="Password"
                                        value="{{ old('Password') }}" placeholder="Password">
                                    <label for="floatingPassword" style="color:black">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        value="{{ old('confirm password') }}" name="confirm password"
                                        placeholder="Password">
                                    <label for="floatingPassword" style="color:black">Confirm Password</label>
                                </div>

                                <div style="padding-bottom: 10px">Gender </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="Gender" id="flexRadioDefault1"
                                        value="{{ old('Gender') }}">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="Gender" id="flexRadioDefault1"
                                        value="{{ old('Gender') }}">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Female
                                    </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingDate" placeholder="Date of birth"
                                        value="{{ old('Date of birth') }}" name="Date of birth">
                                    <label for="floatingDate" style="color:black">Date of birth</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="name" class="form-control" id="floatingPassword" placeholder="Country"
                                        value="{{ old('Country') }}" name="Country">
                                    <label for="floatingPassword" style="color:black">Country</label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-login text-uppercase fw-bold" style="background-color:#757575;"
                                        type="submit">Sign
                                        up</button>
                                </div>
                                <hr class="my-4">
                                <div class="text-center pt-3">Have Account? <a href="{{ url('/') }}">Login
                                        Here</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
