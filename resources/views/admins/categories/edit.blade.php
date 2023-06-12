@extends('admins.layouts.master')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0"> Update page </h1>

            @include('admins.layouts.errors')
        </div><!-- /.col -->
        </div>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('categories.update',$category->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="text" 
                    class="form-control mb-3" 
                    name="title" 
                    value="{{$category->name}}"
                     placeholder=" title">
                     <div class="mb-3">
                        <input type="text" name="Time period"  
                        class="form-control" placeholder="Time period" 
                        value="{{ old('Time period') }}">
                    </div>
                    <div class="mb-3">
                        <textarea name="content"
                         rows="7" class="form-control" 
                         placeholder="Content">{{ old('content') }}</textarea>
                    </div>
                    <button class="btn btn-warning">
                        Update
                    </button>
                </form>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</div>
</div>  






@stop