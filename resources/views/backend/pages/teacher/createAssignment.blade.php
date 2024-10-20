@extends('backend.pages.teacher.teacherDashboard')

@section('body-content')

<div class="container mt-5">

    <form action="{{ url('store-assignment') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Assignment name</label>
                    <input type="text" name="assignment_name" id="" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Select course</label>
                    <select name="course_name" class="form-control" id="">
                        <option value="">Select course</option>
                        @foreach($course as $c)
                        <option value="{{ $c->course_name }}">{{ $c->course_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Select group</label>
                    <select name="group_name" class="form-control" id="">
                        <option value="">Select group</option>
                        <option value="UML">UML</option>
                        <option value="Software testing">Software testing</option>
                        <option value="Process model">Process model</option>
                        <option value="SRS">SRS</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Student selected group</label>
                    <select name="student_group" class="form-control" id="">
                        <option value="">Select student group</option>
                        @foreach($group_name as $g)
                        <option value="{{ $g->group_name }}">{{ $g->group_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Assignment description</label>
                    <textarea name="assignment_description" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection