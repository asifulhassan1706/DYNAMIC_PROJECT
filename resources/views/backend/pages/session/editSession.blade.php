@extends('backend.layout.template')

@section('body-content')
<nav class="navbar navbar-expand-sm bg-light">
  
  <ul class="navbar-nav ml-auto">

      <li class="nav-item">
          <a class="nav-link" href="{{ url('create-session') }}">Create Session</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ url('session')}}">All Session</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ url('session') }}">Edit Session</a>
      </li>
</ul>
</nav>

<br>
<div class="container">

<h2>Update Session</h2>

<form action="{{ url('update-session/'.$session->id) }}" method="post">
            {{ csrf_field() }}
            
               <div class="row">

                <div class="col-md-6 ">
                <div class="form-group" class="col-md-6">
                            <label for="">Session Name</label>
                            <input type="text" value="{{ $session->name }}"  name="name" class="form-control" required>
                </div>
                    <label for="status">Status</label><br>
                    <input type="radio" {{$session->status==1 ? 'checked' : ' '  }} id="active" name="status" value="1">
                    <label for="active">Active</label><br>
                    <input type="radio" {{$session->status==0 ? 'checked' : ' '  }} id="inactive" name="status" value="0">
                    <label for="inactive">Inactive</label><br>
                <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
            </div>

            
        </form>
      </div>
             
</div>

@endsection