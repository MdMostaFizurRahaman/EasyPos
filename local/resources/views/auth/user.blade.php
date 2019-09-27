@extends('layouts.app')

@section('title')
    Users
@endsection

@section('content')
    <div class="container">
    @if(session()->has("success"))
    <div class="alert alert-bordered alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong><i class="fa fa-check-circle"></i> Success!</strong> {{session()->get('success')}}
    </div>
    @endif
    <div class="card">
    <div class="card-header">
            <h4 class="d-inline-block card-title tx-22 mg-b-0"><i class="fa fa-list"></i> Users</h4>
            <div class="d-inline-block float-right">
            <a  href="{{route('user.add')}}" class="btn btn-icon btn-primary"><div><i class="fa fa-plus"></i></div></a>
                <a href="" class="btn btn-icon btn-primary"><div><i class="fa fa-print"></i></div></a>
            </div>
        </div>
        <div class="card-body">
            <div class="card card-table">
                    <div class="table-responsive">
                      <table class="table mg-b-0 tx-12">
                        <thead>
                          <tr class="tx-10">
                            <th class="wd-10p pd-y-5">&nbsp;</th>
                            <th class="pd-y-5">User</th>
                            <th class="pd-y-5">Email</th>
                            <th class="pd-y-5 text-center">Edit</th>
                            <th class="pd-y-5 text-center">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="pd-l-20">
                                     <img src="{{asset('uploads')}}/{{$user->image}}" class="wd-36 rounded-circle" alt="Image">
                                    </td>
                                    <td>
                                    <a href="" class="tx-inverse tx-14 tx-medium d-block">{{$user->name}}</a>
                                        <span class="tx-11 d-block">User Type: {{$user->role}}</span>
                                    </td>
                                    <td class="tx-12">
                                        <span class="square-8 bg-primary mg-r-5 rounded-circle"></span> {{$user->email}}
                                    </td>
                                    <td align='center'><a href="{{route('user.show', $user->id)}}" class="btn btn-sm btn-primary " > <i class="fa fa-edit"></i></a></td>
                                    <td align='center'><a href="{{route('user.destroy', $user->id)}}" class="btn btn-sm btn-danger delete" > <i class="fa fa-trash"></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div><!-- table-responsive -->
                  </div><!-- card -->

        </div>
        <div class="card-footer">

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
        $(document).ready(function(){

            $('.dropify').dropify();

            $('.delete').click(function() {
                event.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.value) {
                        window.location = $(this).attr('href');
                    }
                })
            });

        })
        </script>

@endsection

