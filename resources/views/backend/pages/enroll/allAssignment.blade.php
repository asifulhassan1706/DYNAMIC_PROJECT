@extends('backend.layout.template')

@section('body-content')

<table class="table table-hover">
    <thead>
        <th>Assignment name</th>
        <th>Course</th>
        <th>Group name</th>
        <th>Student group name</th>
        <th>Description</th>
    </thead>
    <tbody>
        @foreach($result as $r)
        <tr>
            <td>{{ $r->assignment_name }}</td>
            <td>{{ $r->course }}</td>
            <td>{{ $r->group_name }}</td>
            <td>{{ $r->student_group }}</td>
            <td>{{ $r->description }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection