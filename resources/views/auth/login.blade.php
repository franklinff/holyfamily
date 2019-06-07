@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">

                    @if($errors->any())
                        <div id="error_msg" class="alert alert-dismissable alert-danger">
                        <h4>{{$errors->first()}}</h4>
                        </div>
                    @endif


                    <form method="get" action="{{ route('loginuser') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group m-form__group" style="margin-top: 16px;">
                            <div class="d-flex justify-content-between">

                                <i onclick="document.getElementById('captcha_img').src='{{ URL::to('captcha') }}'; return false"
                                   title="Recapture" aria-hidden="true" style="font-size: 24px;cursor: pointer;">
                                    <img style="width: 25px;height: 25px" src= {{ URL::to('refresh.png')}}>
                                </i>


                                <span class="captcha-wrapper" style="margin-left: -50px"> <img id="captcha_img" src="{{ URL::to('captcha') }}"></span>
                                <input type="text" id="captcha" class="form-control" name="captcha" placeholder="Captcha" style="width:200px;">

                                @if($errors->has('captcha'))
                                    <span class="help-block captcha-input-error" style="color: red;">
                                        Invalid Captcha
                                    </span>
                            </div>
                            @endif
                        </div>


                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
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
</div>
@endsection

@section('js')
    <script src="{{ asset('js/jquery-3.3.1.min.js')  }}" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $('#error_msg').fadeIn().delay(1300).fadeOut();
            $('.captcha-input-error').fadeIn().delay(1300).fadeOut();
        });
    </script>
@endsection


