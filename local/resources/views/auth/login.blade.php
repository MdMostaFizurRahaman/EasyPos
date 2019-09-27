@extends('layouts.login')

@section('content')

<div class="signin-wrapper">

        <div class="signin-box">
            <div class="text-center">
                    <h2 class="slim-logo"><a href="index.html">Deadly<span>Arena</span></a></h2>
                    <h2 class="signin-title-primary">Welcome back!</h2>
                    <h3 class="signin-title-secondary">Login to continue.</h3>
        </div>
    <form action="{{route('login')}}" method="POST">
        @csrf
          <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div><!-- form-group -->
          <div class="form-group mg-b-50">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
          </div><!-- form-group -->
          <button type="submit" class="btn btn-primary btn-block btn-signin">Log in</button>
            {{-- <a class="mg-b-0">Don't have an account? <a href="{{route('register')}}">Register</a></a> --}}
        </div><!-- signin-box -->
    </form>


      </div><!-- signin-wrapper -->
@endsection
