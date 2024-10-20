@extends('backend.layout.template')

@section('body-content')

<h2 style= "text-align:center; color:DodgerBlue; font-weight:bold"> Course Information </h2>

<table class="table table-hover">
    <thead>
        <th>No.</th>
        <th class="col-5">Course name</th>
        <th>Semester</th>
        <th>Section</th>
    </thead>
    <tbody>
        <form action="{{ url('store-enrollment') }}" method="post">
            @csrf
            @foreach($course as $c)
            <tr>
                <td><input type="checkbox" name="course_id[]" value="{{ $c->id }}" aria-label="Checkbox for following text input"></td>
                <td>{{ $c->course_name }}</td>
                <td>{{ $c->semester }}</td>
                <td>
                    <select name="section[]" id="" class="form-control">
                        <option value="">Select Section</option>
                        <option value="A"> A </option>
                        <option value="B"> B </option>
                        <option value="C"> C </option>
                        <option value="A1"> A1 </option>
                        <option value="A2"> A2 </option>
                        <option value="B1"> B1 </option>
                        <option value="B2"> B2 </option>
                        <option value="C1"> C1 </option>
                        <option value="C2"> C2 </option>
                    </select>
                </td>
            </tr>
            @endforeach
            <tr>
                <td><input type="hidden" name="session" value="{{ $session_info }}"></td>
                <td>
                    <button type="submit" class="btn btn-outline-dark btn-md">Submit</button>
                </td>
            </tr>
        </form>
    </tbody>
</table>

    

@endsection