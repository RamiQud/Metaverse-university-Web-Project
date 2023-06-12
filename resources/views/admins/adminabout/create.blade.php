@extends('admins.layouts.master')

@section('content')

<div class="container-fluid">

    <div class="row justify-content-center">

        <div class="col-12">
            <h2 class="mb-4">Add New About</h2>
		
            @include('admins.layouts.errors')
        		 					

            <form action="{{ route('about.store') }}" method="POST"
            enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <input type="text" name="Job_title" 
                    class="form-control" placeholder="Job title" 
                    value="{{ old('Job title') }}">
                </div>

                <div class="mb-3">
                    <input type="text" name="Birthday" 
                    class="form-control" placeholder="Birthday" 
                    value="{{ old('Birthday') }}">
                </div>

                <div class="mb-3">
                    <input type="text" name="Age" 
                    class="form-control" placeholder="Age" 
                    value="{{ old('Age') }}">
                </div>

                <div class="mb-3">
                    <input type="text" name="Website" 
                    class="form-control" placeholder="Website" 
                    value="{{ old('Website') }}">
                </div>

                <div class="mb-3">
                    <input type="text" name="Degree" 
                    class="form-control" placeholder="Degree" 
                    value="{{ old('Degree') }}">
                </div>

                <div class="mb-3">
                    <input type="text" name="Phone" 
                    class="form-control" placeholder="Phone" 
                    value="{{ old('Phone') }}">
                </div>

                <div class="mb-3">
                    <input type="text" name="City" 
                    class="form-control" placeholder="City" 
                    value="{{ old('City') }}">
                </div>
                
                <div class="mb-3">
                    <input type="text" name="Freelance" 
                    class="form-control" placeholder="Freelance" 
                    value="{{ old('Freelance') }}">
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

                <button class="btn btn-info px-5">Add</button>
            </form>
        </div>

    </div>

</div>


@stop
