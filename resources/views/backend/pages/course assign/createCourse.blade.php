@extends('backend.layout.template')

@section('body-content') 

<h2 style= "text-align:center; color:DodgerBlue; font-weight:bold"> Course assign </h2>
<div class="container mt-5">
    <!-- <a href="{{ url('all') }}"></a> -->
        <form action="{{ url('store-course-assign') }}" method="post">
            @csrf
            
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Session</label>
                        <select name="session_info" id="" class="form-control">
                            <option value="">Select session</option>
                            @foreach($session_info as $si)
                            <option value="{{ $si->name }}"> {{ $si->name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Course name</label>
                        <select name="course_name" id="" class="form-control">
                            <option value="">Select course</option>
                            @foreach($course as $c)
                            <option value="{{ $c->course_name }}"> {{ $c->course_name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Section</label>
                        <select name="section" id="" class="form-control">
                            <option value="">Select section</option>
                            @foreach($section as $s)
                            <option value="{{ $s->sectionname }}"> {{ $s->sectionname }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Course teacher</label>
                        <select name="course_teacher" id="" class="form-control">
                            <option value="">Select teacher</option>
                            @foreach($teacher as $t)
                            <option value="{{ $t->name }}"> {{ $t->name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                        <button type="submit" class="btn btn-danger">Assign Course</button>
                </div>
            </div>
        </div>
        </form>
    </div>

@endsection