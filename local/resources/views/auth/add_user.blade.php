@extends('layouts.app')

@section('title')
    Add User
@endsection

@section('styles')
    <style>
        #dropify {
           width: 12.5rem;
           height: 12.5rem;
           margin-right: auto;
           margin-left: auto;
        }
    </style>
@endsection

@section('content')
<div class="container">
<form method="post" action="{{route('user.store')}}" enctype="multipart/form-data" >
        {{ csrf_field() }}
        <div class="card">
            <div class="card-header bg-transparent">
                <h4 class="d-inline-block card-title tx-22 mg-b-0"><i class="fa fa-user-plus"></i> Add user</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="form-group">
                            <input placeholder="Enter Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div id="dropify">
                                <input name="image" data-allowed-file-extensions="jpg png bmp" data-max-file-size="1M" type="file" class="dropify" required />
                        </div>

                    </div>
                </div>
              </div><!-- card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('user')}}" class="btn btn-danger">Cancel</a>
            </div>

        </div>
    </form>
</div>
@endsection


@section('scripts')

<script>
    $(function(){
        $('.dropify').dropify();
    })


</script>

@endsection




{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <form method="POST" action="">
    @csrf
        <div class="signin-wrapper">

                <div class="signin-box signup">
                <div class="text-center">
                        <h2 class="slim-logo"><a href="index.html">Easy<span>Store</span></a></h2>
                        <h3 class="signin-title-primary">Get Started!</h3>
                        <h5 class="signin-title-secondary lh-4">It's free to register and only takes a minute.</h5>
                </div>


                  <div class="row row-xs mg-b-10">
                        <input placeholder="Enter Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div><!-- row -->

                  <div class="row row-xs mg-b-10">
                        <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div><!-- row -->
                  <div class="row row-xs mg-b-10">
                        <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                  </div><!-- row -->
                  <div class="row row-xs mg-b-10">
                        <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div><!-- row -->

                  <button type="submit" class="btn btn-primary btn-block btn-signin">Register</button>
                </div><!-- signin-box -->

        </div><!-- signin-wrapper -->
</form> --}}
