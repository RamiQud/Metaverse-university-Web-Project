@extends('admins.layouts.master')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0"> POST PAGE </h1>

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
                		
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" 
                        name="title" 
                        placeholder="Title" 
                        value="{{ old('title') }}">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    
                     <div class="mb-3">
                        <input type="text" name="subtitle" 
                        class="form-control" placeholder="subtitle" 
                        value="{{ old('subtitle') }}">
                    </div>
                   
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                {{-- <select name="category_id" class="form-control mb-3">
                    <option value="" disabled selected>Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select> --}}
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