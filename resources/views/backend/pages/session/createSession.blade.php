@extends('backend.layout.template')

@section('body-content')


<br>
<div class="container">

<h2>Create Session</h2>
<form action="{{ url('store-session') }}" method="post">
    {{ csrf_field() }}
    
        <div class="row">

        <div class="col-md-6 ">
        <div class="form-group" class="col-md-6">
            <label for="">Session Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
            <label for="status">Status</label><br>
            <input type="checkbox" id="active" name="status" value="1">
            <label for="active">Active</label><br>
            <input type="checkbox" id="inactive" name="status" value="0">
            <label for="inactive">Inactive</label><br>
        <div class="form-group">
    <button type="submit" class="btn btn-primary">Save</button>
    </div>

    
</form>
</div>
             

@endsection