@extends('backend.layout.template')

@section('body-content')
    <h2 class="text-center">edit page</h2>

    <form class="container w-50" method="post" action="{{ url('store-update/'.$course->id) }}">
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Course Name</label>
        <input type="text" name="course_name" value="{{ $course->course_name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Course Code</label>
    <input type="text" name="course_code" value="{{ $course->course_code}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Course Credit</label>
        <input type="number" name="course_credit" value="{{ $course->course_credit }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">COURSE TYPE</label>
    <select name="course_type" id="" class="form-control">
        <option value="">Select type</option>
        <option value="LAB" {{ $course->course_type == 'LAB' ? 'selected' : '' }}>LAB</option>
        <option value="THEORY" {{ $course->course_type == 'THEORY' ? 'selected' : '' }}>THEORY</option>
    </select>
  </div>

  <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Semester</label>
        <select name="semester" id="" class="form-control">
            <option value="">Select semester</option>
            <option value="1st" {{ $course->semester == '1st' ? 'selected' : '' }}> 1st </option>
            <option value="2nd" {{ $course->semester == '2nd' ? 'selected' : '' }}> 2nd </option>
            <option value="3rd" {{ $course->semester == '3rd' ? 'selected' : '' }}> 3rd </option>
            <option value="4th" {{ $course->semester == '4th' ? 'selected' : '' }}> 4th </option>
            <option value="5th" {{ $course->semester == '5th' ? 'selected' : '' }}> 5th </option>
            <option value="6th" {{ $course->semester == '6th' ? 'selected' : '' }}> 6th </option>
            <option value="7th" {{ $course->semester == '7th' ? 'selected' : '' }}> 7th </option>
            <option value="8th" {{ $course->semester == '8th' ? 'selected' : '' }}> 8th </option>
        </select>
  </div>
    
      <button type="submit" class="btn btn-primary">update</button>
  </form>
@endsection