@extends('backend.layout.template')

@section('body-content')  
    <h2 style= "text-align:center; color:DodgerBlue; font-weight:bold"> Course Information </h2>
<div class="container mt-5">
    <a href="{{ url('all') }}"></a>
        <form action="{{ url('store-course') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Course Name</label>
                        <input type="text" name="course_name" id="" class="form-control" placeholder="Enter course name">
                    </div> 
                </div>  
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Course Code</label>
                        <input type="text" name="course_code" id="" class="form-control" placeholder="Enter course code">
                    </div>               
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Course Credit</label>
                        <select name="course_credit" id="" class="form-control">
                            <option value="">Select credit</option>
                            <option value="1"> 1 </option>
                            <option value="1.5"> 1.5 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                            <option value="4"> 4 </option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Subject type</label>
                        <select name="course_type" id="" class="form-control">
                            <option value="">Select subject type</option>
                            <option value="LAB"> LAB </option>
                            <option value="THEORY"> THEORY </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Semester</label>
                        <select name="semester" id="" class="form-control">
                            <option value="">Select semester</option>
                            <option value="1st"> 1st </option>
                            <option value="2nd"> 2nd </option>
                            <option value="3rd"> 3rd </option>
                            <option value="4th"> 4th </option>
                            <option value="5th"> 5th </option>
                            <option value="6th"> 6th </option>
                            <option value="7th"> 7th </option>
                            <option value="8th"> 8th </option>
                        </select>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                        <button type="submit" class="btn btn-danger">Add Course</button>
                </div>
            </div>
        </div>
        </form>
    </div>
 @endsection