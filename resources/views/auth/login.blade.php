@extends('layouts.app') 
@section('title','Login') 
@section('content')
<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <img src={{ asset( "images/icon/logo-big.png") }} alt="Birulapp" width="75%">
                </div>
                <div class="login-form">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                required autocomplete="email" autofocus> @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span> @endif
                        </div>
                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                required autocomplete="current-password"> @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span> @endif
                        </div>
                        <center>
                            <div class="login-checkbox">
                                <label>
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="remember">
                                                {{ __('Recuerdame') }}
                                            </label>

                                </label>
                                @if (Route::has('password.request'))
                                <label>
                                                <a href="{{ route('password.request') }}">¿Password olvidado?</a>
                                            </label> @endif
                            </div>
                        </center>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Login') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection