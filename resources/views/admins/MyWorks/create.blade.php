@extends('admins.layouts.master')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0"> MY WORK page </h1>

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
                <form action="{{ route('works.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="Created_by" 
                        class="form-control" placeholder="Created_by" 
                        value="{{ old('Created_by') }}">
                    </div>
                    
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
                </div>
                    <div class="mb-3">
                        <textarea name="content"
                         rows="7" class="form-control" 
                         placeholder="Content">{{ old('content') }}</textarea>
                    </div>
                    <button class="btn btn-info">
                        Add
                    </button>
                </form>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</div>
</div>





@stop