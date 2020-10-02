
@extends('layouts.authlayout')
{{-- <h1></h1> --}}
@section('form')
<form method="POST" action="{{ route('login') }}" class="login100-form validate-form m-t-100 m-b-40">
    @csrf
    <span class="login100-form-title p-b-34">
{{-- <h1>form </h1> --}}
        <img src="{{asset('img/logo2.jpg')}}" alt="" >
    </span>


    @error('email')
    <div class="alert alert-danger w-100 mb-1">{{ $message }}</div>
    @enderror
    <div class="wrap-input100 validate-input m-b-20" data-validate="Type user name">
        <input id="email" class="input100 @error('email') is-invalid @enderror" type="email" name="email"
            placeholder="Email">
        <span class="focus-input100"></span>
    </div>

    @error('password')
    <div class="alert alert-danger w-100 mb-1">{{ $message }}</div>
    @enderror
    <div class="wrap-input100 validate-input m-b-20" data-validate="Type password">
        <input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password"
            placeholder="Password">
        <span class="focus-input100"></span>
    </div>

    <div class="container-login100-form-btn">
        <button type="submit" class="login100-form-btn">
            Connecter
        </button>
    </div>

    <div class="w-full text-center p-t-27 p-b-100">
        @if (Route::has('password.request'))
        {{-- <span class="txt1">
            Forgot
        </span> --}}

        <a href="{{ route('password.request') }}" class="txtlink">
            {{-- Forgot password? --}}
        </a>
        @endif
    </div>

    <div class="w-full text-center">
        <span class="txt1">

        </span>
        <a href="{{ route('register') }}" class="txtlink2">
            Créer un compte
        </a>
    </div>
</form>
@endsection
