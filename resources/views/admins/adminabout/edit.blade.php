@extends('admins.layouts.master')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-12">
            <h2 class="mb-4">Update About</h2>
		
            @include('admins.layouts.errors')
        		 					

            <form action="{{ route('about.update',$abouts->id) }}" method="POST"
            enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <input type="text" name="Job_title" 
                    class="form-control" placeholder="Job title" 
                    value="{{$abouts->Job_title}}">
                </div>

                <div class="mb-3">
                    <input type="text" name="Birthday" 
                    class="form-control" placeholder="Birthday" 
                    value="{{$abouts->Birthday}}) }}">
                </div>

                <div class="mb-3">
                    <input type="text" name="Age" 
                    class="form-control" placeholder="Age" 
                    value="{{$abouts->Age}}">
                </div>

                <div class="mb-3">
                    <input type="text" name="Website" 
                    class="form-control" placeholder="Website" 
                    value="{{$abouts->Website}}">
                </div>

                <div class="mb-3">
                    <input type="text" name="Degree" 
                    class="form-control" placeholder="Degree" 
                    value="{{$abouts->Degree}}">
                </div>

                <div class="mb-3">
                    <input type="text" name="Phone" 
                    class="form-control" placeholder="Phone" 
                    value="{{$abouts->Phone}}">
                </div>

                <div class="mb-3">
                    <input type="text" name="City" 
                    class="form-control" placeholder="City" 
                    value="{{$abouts->City}}">
                </div>
                
                <div class="mb-3">
                    <input type="text" name="Freelance"
                    class="form-control" placeholder="Freelance" 
                    value="{{$abouts->Freelance}}">
                </div>

                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                    <img width="200" class="mt-1" src="{{ asset('upload/' . $abouts->image) }}" alt="">
                </div>

                <div class="mb-3">
                    <textarea name="content"
                     rows="7" class="form-control" 
                     placeholder="Content">{{$abouts->content }}</textarea>
                </div>

                <button class="btn btn-success px-5">Update</button>
            </form>
        </div>

    </div>

</div>


@stop
