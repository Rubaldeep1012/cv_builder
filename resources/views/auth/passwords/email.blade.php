@extends('layouts.user')

@section('content')
    <header class="masthead">
        <div class="container h-100">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card" style="margin-top: 110px;">
                        <div class="card-header">Reset Password</div>
        
                        <div class="card-body">
                            <form method="post" action="{{ route('verifyEmail') }}">
                                @csrf
                                @if (\Session::has('message'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            <li>{!! \Session::get('message') !!}</li>
                                        </ul>
                                    </div>
                                @endif
                                 
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="dob" type="date" class="form-control @error('email') is-invalid @enderror" name="dob" value="{{ old('email') }}" required autocomplete="dob" autofocus max="2002-01-01">   
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Submit') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection






 