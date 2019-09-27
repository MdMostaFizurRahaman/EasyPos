@extends('layouts.app')

@section('title')
    Add Category
@endsection
@section('content')
<div class="container">
    <form method="post" action="{{route('category.store')}}">
        {{ csrf_field() }}
        <div class="card">
            <div class="card-header bg-transparent">
                <h4 class="d-inline-block card-title tx-22 mg-b-0"><i class="fa fa-plus"></i> Add Category</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Category Name</label>
                    <input type="text" name='name' class="form-control" >
                @if ($errors->has('name'))
                    <div class="error text-danger">{{ $errors->first('name') }}</div>
                @endif
                </div>
                <div class="form-group">
                        <label for="">Status</label>
                        <select class="form-control" name="status" id="status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('product')}}" class="btn btn-danger">Cancel</a>
            </div>

        </div>
    </form>
</div>
@endsection

@section('scripts')
 <!-- Select2 -->

<script>


$(document).ready(function() {
    $('.select2').select2();
});

</script>

@endsection
