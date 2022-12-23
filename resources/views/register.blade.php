@extends('template.template')

@section('page_name', 'register')
@section('content')
    <div class="body">
        {{-- uncomment div di bawah ini untuk memunculkan background coklat gelap, uncomment juga closure tag di paling bawah --}}
        {{-- <div class="container"> --}}
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">

                            <h3 class="card-title text-center mb-5 fs-5">Register</h3>
                            <form action="{{ url('/register-validation') }}" method="POST">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="name" class="form-control" id="floatingInput" placeholder="name"
                                        name="name" value="{{ old('name') }}">
                                    <label for="floatingInput" style="color:black">Name</label>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" name="email"
                                        value="{{ old('email') }}" placeholder="name@example.com">
                                    <label for="floatingInput" style="color:black">Email</label>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="passwords"
                                        value="{{ old('passwords') }}" name="passwords" placeholder="Password">
                                    <label for="pass" style="color:black">Password</label>

                                    @if ($errors->has('passwords'))
                                        <span class="text-danger">{{ $errors->first('passwords') }}</span>
                                    @endif
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="confirm_password"
                                        value="{{ old('confirm_password') }}" name="confirm_password"
                                        placeholder="Password">
                                    <label for="confirm_password" style="color:black">Confirm Password</label>

                                    @if ($errors->has('confirm_password'))
                                        <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                    @endif
                                </div>


                                <label class="mb-2"> Gender </label><br>

                                <input type="radio" id="male" name="gender" value="male"
                                    {{ old('gender') === 'male' ? 'checked' : '' }}>
                                <label for="male">Male</label><br>
                                <input type="radio" id="female" name="gender" value="female"
                                    {{ old('gender') === 'female' ? 'checked' : '' }}>
                                <label for="female">Female</label><br><br>
                                @if ($errors->has('gender'))
                                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                                @endif

                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingDate" placeholder="Date of birth"
                                        value="{{ old('date_of_birth') }}" name="date_of_birth">
                                    <label for="floatingDate" style="color:black">Date of birth</label>

                                    @if ($errors->has('date of birth'))
                                        <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                                    @endif
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select form-select-sm" name="country_id" id="country_id">
                                        <option selected hidden disabled value="">Choose a country</option>
                                        @foreach ($countries as $country)
                                            @if (old('country_id') == $country->id)
                                                <option value="{{ $country->id }}" selected> {{ $country->country }}
                                                </option>
                                            @else
                                                <option value="{{ $country->id }}"> {{ $country->country }} </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <label for="floatingPassword" style="color:black">Country</label>

                                    @if ($errors->has('country_id'))
                                        <span class="text-danger">{{ $errors->first('country_id') }}</span>
                                    @endif
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-login text-uppercase fw-bold" style="background-color:#757575;"
                                        type="submit">Sign
                                        up</button>
                                </div>
                                <hr class="my-4">
                                <div class="text-center pt-3">Have Account? <a href="{{ url('/login') }}">Login
                                        Here</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
    </div>


@endsection
