@extends('backend.layout.template')

@section('body-content')
    <div class="container">
        <h2>All Users</h2>
        <table class="table table-bordered">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Approved?</th>
                <th>Action</th>

            </thead>
            <tbody>
                @foreach($unapp as $u)
                <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->role }}</td>
                    <td>
                        @if($u->is_approved == 1)
                        <span class="badge badge-success">Approved</span>
                        @else
                        <span class="badge badge-danger">Not Approved</span>
                        @endif
                    </td>
                    <td>
                        @if($u->is_approved != 1)
                        <a class="btn btn-sm btn-primary" href="{{ url('approve-user/'.$u->id) }}">Approved</a>
                        @endif
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>

    </div>
@endsection