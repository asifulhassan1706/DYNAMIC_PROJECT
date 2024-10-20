@extends('backend.pages.teacher.teacherDashboard')

@section('body-content')

<table class="table table-hover">
    <thead>
        <th>Group name</th>
        <th>Group members</th>
    </thead>
    <tbody>
        @foreach($result as $r)
        <tr>
            <td>{{ $r->group_name }}</td>
            <td>{{ $r->members }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection