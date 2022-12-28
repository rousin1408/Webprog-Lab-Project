@extends('template.template')

@section('page_name', 'profile')

@section('content')
    <div class="body">
        {{-- uncomment div di bawah ini untuk memunculkan background coklat gelap, uncomment juga closure tag di paling bawah --}}
        {{-- <div class="container"> --}}
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h3 class="card-title text-center mb-5 fs-5">Profile</h3>
                        <div class="form mb-3">
                            <h5 class="card-title ">Name</h5>
                            <input class="form-control" disabled="disabled"
                                value="{{ Illuminate\Support\Facades\Auth::user()->name }}" required>
                        </div>
                        <div class="form mb-3">
                            <h5 class="card-title ">Email</h5>
                            <input class="form-control" disabled="disabled"
                                value="{{ Illuminate\Support\Facades\Auth::user()->email }}" required>
                        </div>
                        <div class="form mb-3">
                            <h5 class="card-title ">Gender</h5>
                            <input class="form-control" disabled="disabled"
                                value="{{ Illuminate\Support\Facades\Auth::user()->gender }}" required>
                        </div>
                        <div class="form mb-3">
                            <h5 class="card-title ">Date of Birth</h5>
                            <input class="form-control" disabled="disabled"
                                value="{{ Illuminate\Support\Facades\Auth::user()->date_of_birth }}" required>
                        </div>
                        <div class="form mb-3">
                            <h5 class="card-title ">Country</h5>
                            <input class="form-control" disabled="disabled"
                                value="{{ Illuminate\Support\Facades\Auth::user()->country['country'] }}" required>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        {{-- uncomment div di bawah ini --}}
        {{-- </div> --}}
    </div>


@endsection
