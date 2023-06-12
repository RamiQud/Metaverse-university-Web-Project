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
                <form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <input type="text" 
                    class="form-control mb-3" 
                    name="title" 
                    value="{{$post->name}}"
                     placeholder="title">
                     <div class="mb-3">
                        <input type="text" name="subtitle"  
                        class="form-control" placeholder="subtitle" 
                        value="{{ old('subtitle') }}">
                    </div>
                
                    <div class="mb-3">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                        <img width="120" src="{{ asset('upload/'.$post->image) }}" alt="">                    </div>
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