
@extends('layouts.app')

@section('title')
    Category
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
    <div class="card-header bg-transparent pd-20">
            <h4 class="d-inline-block card-title tx-22 mg-b-0"><i class="fa fa-list"></i> Category</h4>
            <div class="d-inline-block float-right">
            <a  href="{{route('category.add')}}" class="btn btn-icon btn-primary"><div><i class="fa fa-plus"></i></div></a>
                <a href="" class="btn btn-icon btn-primary"><div><i class="fa fa-print"></i></div></a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead>
                    <th width='5%'>#</th>
                    <th width="30%">Name</th>
                    <th width="5%">Edit</th>
                    <th width="5%">Delete</th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)

                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td><a href="{{route('category.show', $category->id)}}" class="btn btn-sm btn-primary " > <i class="fa fa-edit"></i></a></td>
                        <td><a href="{{route('category.destroy', $category->id)}}" class="btn btn-sm btn-danger delete" > <i class="fa fa-trash"></a></td>
                    </tr>

                    @endforeach
                </tbody>

            </table>
        </div>
        <div class="card-footer">

        </div>
    </div>
</div>
@endsection


@section('scripts')
<script>
        $(document).ready(function(){

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
