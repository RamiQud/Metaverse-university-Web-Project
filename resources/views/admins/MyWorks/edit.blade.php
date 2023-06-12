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
                <form action="{{ route('works.update',$work->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="text" 
                    class="form-control mb-3" 
                    name="Created_by" 
                    value="{{$work->name}}"
                     placeholder=" Created_by">
                     <div class="mb-3">
                        <input type="text" name="Completed_on"  
                        class="form-control" placeholder="Completed_on" 
                        value="{{ old('Completed_on') }}">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="Skills"  
                        class="form-control" placeholder="Skills" 
                        value="{{ old('Skills') }}">
                    </div>
                    
                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                        <img width="120" src="{{ asset('upload/'.$work->image) }}" alt="">                    </div>
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