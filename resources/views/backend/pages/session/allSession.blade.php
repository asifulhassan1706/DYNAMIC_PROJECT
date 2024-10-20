@extends('backend.layout.template')

@section('body-content')

<nav class="navbar navbar-expand-sm bg-light">
  
  <ul class="navbar-nav ml-auto">

      <li class="nav-item">
          <a class="nav-link" href="{{ url('create-session') }}">Create Session</a>
      </li>
      
</ul>
</nav>

    <div class="container">
        <h2>All Session</h2>
        <table class="table table-striped">
            <thead>
                <th>Name</th>
                <th>Status</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach($session as $s)
                <tr>
                    <td>{{ $s->name }}</td>
                    <td>@if($s->status)
                     <span class="badge badge-success">Active</span>
                        @else
                        <span class="badge badge-danger">Inactive</span>
                        @endif

                    </td>
                    
                    <td>
                        <a class="btn btn-primary" href="{{ url('edit-session/'.$s->id) }}">Edit</a>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#myModal{{ $s->id }}">Delete</a>
                        <div class="modal" id="myModal{{ $s->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Confirmation</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        Are you sure you want to delete <b>{{ $s->name }}</b>?
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                        <a class="btn btn-success" href="{{ url('delete-session/'.$s->id) }}">Yes</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection