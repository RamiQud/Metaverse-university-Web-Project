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
                        <th>Created_by</th>
                        <th>Completed_on</th>
                        <th>Skills</th>
                        <th>image</th>
                        <th>Content</th>
                        <th>Created At</th>
                        <th>Update At</th>
                        <th>Action</th>
                      </tr>
        
                        @foreach ($work as $work)
                        <tr>
                            <td>{{ $work->id }}</td>
                            <td>{{ $work->Created_by }}</td>
                            <td>{{ $work->Completed_on}}</td>
                            <td>{{ $work->Skills }}</td>
                            <th>
                              <img width="80" src="{{asset('uploads/'.$work->image)}}" alt="">
                          </th>
                            <td>{{ $work->content }}</td>
                            <td>{{ $work->created_at }}</td>
                            <td>{{ $work->updated_at }}</td>
                            <td>
    <a href="{{ route('works.edit', $work->id) }}" 
    class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
    <form class="d-inline" 
    action="{{ route('works.destroy', $work->id) }}" 
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