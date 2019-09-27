@extends('layouts.app')

@section('title')
    Edit User
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
        @if(session()->has("error"))
        <div class="alert alert-bordered alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong><i class="fas fa-times-circle"></i> Error!</strong> {{session()->get('error')}}
        </div>
        @endif
<form method="post" action="{{route('user.update', $user->id)}}" enctype="multipart/form-data" >
        {{ csrf_field() }}
        <div class="card">
            <div class="card-header bg-transparent">
                <h4 class="d-inline-block card-title tx-22 mg-b-0"><i class="fas fa-user-edit"></i> Edit user</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="form-group">
                            <input value="{{$user->name}}" placeholder="Enter Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input value="{{$user->email}}" placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span value="{{$user->email}}" class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                                <input  placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                                <div class="text-danger">
                                        <h5>Enter your password to complete</h5>
                                    </div>
                    </div>

                    <div class="col-lg-3">
                        <div id="dropify">
                                <input name="image" data-show-remove="false" data-default-file="{{asset('uploads')}}/{{$user->image}}" data-allowed-file-extensions="jpg png bmp" data-max-file-size="1M" type="file" class="dropify" />
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
