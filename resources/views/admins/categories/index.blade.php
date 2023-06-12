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
        <h1 class="m-0">  All Education </h1>

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
                        <th>Title</th>
                        <th>Time period</th>
                        <th>Content</th>
                        <th>Created At</th>
                        <th>Update At</th>
                        <th>Action</th>
                      </tr>
        
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->title }}</td>
                            <td>{{ $category->Time_period}}</td>
                            <td>{{ $category->content }}</td>
                            <td>{{ $category->created_at }}</td>
                            <td>{{ $category->updated_at }}</td>
                            <td>
    <a href="{{ route('categories.edit', $category->id) }}" 
        class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
    
    <form class="d-inline" 
    action="{{ route('categories.destroy', $category->id) }}" 
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