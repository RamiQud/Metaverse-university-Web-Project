@extends('admins.layouts.master')
@section('content')

<div class="container-fluid">
    <table class="table">
        <h2 class="mb-3">About Page</h2>

        @if (session('success'))
        <div class="alert alert-{{ session('type') }} alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    @endif


    <tr>
        <td>
            <th> Id</th>
            <th> Job_title</th>
            <th>Image</th>
            <th>Birthday</th>
            <th>Age</th>
            <th>Websie</th>
            <th>Degree</th>
            <th>Phone</th>
            <th>City</th>
            <th>Freelance</th>
            <th>Created_At</th>
            <th>Action</th>
        </td>
    </tr>
    
    @forelse ($about as $adminabout)
    <tr>
        <th>
            <th> {{$adminabout->id}}</th>
            <th> {{$adminabout->Job_title}}</th>
            <th>
                <img width="80" src="{{asset('uploads/'.$adminabout->image)}}" alt="">
            </th>
            <th>{{$adminabout->Birthday}}</th>
            <th>{{$adminabout->Age}}</th>
            <th>{{$adminabout->Website}}</th>
            <th>{{$adminabout->Degree}}</th>
            <th>{{$adminabout->Phone}}</th>
            <th>{{$adminabout->City}}</th>
            <th>{{$adminabout->Freelance}}</th>
            <th>{{$adminabout->created_at}}</th>
            <th>
                <a href="{{ route('about.edit', $adminabout->id) }}" 
                    class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                
                <form class="d-inline" 
                action="{{ route('about.destroy', $adminabout->id) }}" 
                method="POST">
                @csrf
                @method('delete')
                <button onclick="return confirm('are you sure?')" 
                class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
                </form>
            </th>
        </th>
    </tr> 
    @empty  
    @endforelse
    </table>
</div>
@stop