@extends('layouts.app')

@section('title')
    Add product
@endsection
@section('content')
<div class="container">
    <form method="post" action="{{route('product.store')}}">
        {{ csrf_field() }}
        <div class="card">
            <div class="card-header bg-transparent">
                <h4 class="d-inline-block card-title tx-22 mg-b-0"><i class="fa fa-plus"></i> Add Product</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Product Name</label>
                    <input type="text" name='name' class="form-control" >
                @if ($errors->has('name'))
                    <div class="error text-danger">{{ $errors->first('name') }}</div>
                @endif
                </div>
                <div class="form-group">
                        <label for="">Rate</label>
                        <input type="number" name='rate' class="form-control" step="any" >
                    @if ($errors->has('rate'))
                        <div class="error text-danger">{{ $errors->first('rate') }}</div>
                    @endif
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
