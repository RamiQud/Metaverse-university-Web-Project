@extends('admins.layouts.master')

@section('content')

{{-- <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
       

           
          </div><!-- /.col -->
        </div>
    </div>
</div> --}}

<div class="container-fluid">
    <table class="table">
        <h1 class="m-0">  All Works </h1>

        @if (session('success'))
        <div class="alert alert-{{ session('type') }} alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    @endif
                      <tr>
                        <th>ID</th>
                        <th>title</th>
                        <th>subtitle</th>
                        <th>image</th>
                        <th>Content</th>
                        <th>Created At</th>
                        <th>Update At</th>
                        <th>Action</th>
                      </tr>
        
                        @foreach ($post as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->subtitle}}</td>
                            <th>
                              <img width="80" src="{{asset('uploads/'.$post->image)}}" alt="">
                          </th>                          
                  
                            <td>{{ $post->content }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->updated_at }}</td>
                            <td>
    <a href="{{ route('posts.edit', $post->id) }}" 
    class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
    <form class="d-inline" 
    action="{{ route('posts.destroy', $post->id) }}" 
    method="POST">
    @csrf
    @method('delete')
    <button onclick="return confirm('are you sure?')" 
    class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
    </form>
      </td>
                          </tr>
                        @endforeach
  
                  
                  </table>
                  

            


            </div>
          
          </div>
    </div>
</div>



@stop