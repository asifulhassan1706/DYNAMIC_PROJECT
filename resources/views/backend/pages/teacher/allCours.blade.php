@extends('backend.pages.teacher.teacherDashboard')

@section('body-content')

<div class="container">
         <h2 class="text-center">Course Information</h2>
                <table class="table table-control container">
                     <thead>
                        <th>Course Name</th>
                        <th>Course Code</th>
                        <th>Course Credit</th>
                        <th>Course Type</th>
                        <th>Semester</th>
                        <th>Action</th>
                     </thead>
                  <tbody>
                @foreach($data as $p)
                <tr>
                    <td>{{ $p->course_name }}</td>
                    <td>{{ $p->course_code }}</td>
                    <td>{{ $p->course_credit}}</td>
                    <td>{{ $p->course_type }}</td>
                    <td>{{ $p->semester }}</td>

                    
                    <td>
                        <a class="btn btn-primary" href="{{ url('edit/'.$p->id) }}">Edit</a>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#myModal{{ $p->id }}">Delete</a>
                        <div class="modal" id="myModal{{ $p->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Confirmation</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        Are you sure you want to delete <b>{{ $p->course_name }}</b>?
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                                        <a class="btn btn-success" href="{{ url('delete-course/'.$p->id) }}">Yes</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>

                   

                </tr> 
                @endforeach
            </tbody>
        </table>
    </div>

@endsection