@extends('backend.layout.template')

@section('body-content')

<nav class="navbar navbar-expand-sm bg-light">
  
  <ul class="navbar-nav ml-auto">

      <li class="nav-item">
          <a class="nav-link" href="{{ url('create-course-assign') }}">Assign teacher</a>
      </li>
      
</ul>
</nav>

    <div class="container">
        <h2>Course assign list</h2>
        <table class="table table-striped">
            <thead>
                <th>Session</th>
                <th>Course Name</th>
                <th>Section</th>
                <th>Teacher</th>
            </thead>
            <tbody>
                @foreach($all as $s)
                <tr>
                    <td>{{ $s->session }}</td>
                    <td>{{ $s->course_name }}</td>
                    <td>{{ $s->section }}</td>
                    <td>{{ $s->course_teacher }}</td>
                    
                    <td>
                        <a class="btn btn-primary" href="{{ url('edit-course-assign/'.$s->id) }}">Edit</a>
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
                                        Are you sure you want to delete <b>{{ $s->course_name }}</b>?
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                        <a class="btn btn-success" href="{{ url('delete-course-session/'.$s->id) }}">Yes</a>
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