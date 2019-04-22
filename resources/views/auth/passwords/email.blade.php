@extends('layouts.app') 
@section('title','Recuperar Password') 
@section('content')
<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <h1>{{ __('Recuperar Password') }}</h1>
                </div>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="login-form">
                    <form action="{{ route('password.email') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                required autocomplete="email" autofocus> @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span> @endif
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">{{ __('Envia Link de Recuperación') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection