@extends('backend.layout.template')

@section('body-content')
<nav class="navbar navbar-expand-sm bg-light">
  
  <ul class="navbar-nav ml-auto">

      <li class="nav-item">
          <a class="nav-link" href="{{ url('create-course-assign') }}">Create Session</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ url('all-course-assign')}}">All Session</a>
      </li>
      
</ul>
</nav>

<br>
<div class="container">

<h2>Update course assign</h2>

<form action="{{ url('update-course-assign/'.$data->id) }}" method="post">
            {{ csrf_field() }}
            
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Session Name</label>
                        <input type="text" value="{{ $data->session }}"  name="session_info" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Course Name</label>
                            <input type="text" name="course_name" value="{{ $data->course_name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Section</label>
                            <input type="text" name="section" value="{{ $data->section }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Course teacher</label>
                            <input type="text" name="course_teacher" value="{{ $data->course_teacher }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>
                </div>
                
            <button type="submit" class="btn btn-primary">Update</button>

            
        </form>
      </div>
             
</div>

@endsection