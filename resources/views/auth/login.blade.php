


@extends('auth.partial.master')

@section('title')
Login page
@endsection
@section('content')

@section('content')

<div class="container-fluid registration" style="    margin-top: 0px;
             margin-bottom: 40px;
             height: 600px;
             padding-top: 30px;
             padding-bottom: 0px;
             background-image: url('images/frontCarousel/0.jpg');
             background-attachment: fixed;
             background-size: cover;
             ">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <!--                    <div class="register col-md-5">-->
                    <div class=" col-md-6 text-white d-flex align-items-center rgba-grey-light py-5 px-6" style="margin-top: 80px;">
                        
                     <form class="" style="color: #757575;" method="post" action="{{ route('login') }}" enctype="multipart/form-data">

                        @csrf
                        <!--                     for error show -->

                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 form-control-label  text-md-right" style="color: white; font-size: 18px;">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="name@diu.edu.bd">
                                
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 form-control-label  text-md-right" style="color: white; font-size: 18px;">Password</label>
                            <div class="col-md-6">
                                <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="******">
                           @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                       <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                           <label class="form-check-label" for="remember" style="color: white;">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-light">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: white;">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    </div>
                </div>

            </div>
        </div>



@endsection
