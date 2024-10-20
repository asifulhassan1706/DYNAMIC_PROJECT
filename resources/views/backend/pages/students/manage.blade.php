@extends('backend.layout.template')

@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Manage All Student</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
    </div>
    <div class="br-pagebody">
        <div class="row row-sm">
            <div class="col-sm-12">
                <div class="card shadow-base bd-0 overflow-hidden">
                    <div class="pd-x-25 pd-t-25">
                         <h2 class="tx-15 mt-2 mr-2 tx-uppercase tx-inverse tx-semibold tx-spacing-1 mg-b-20">Manage All Student</h2>
                         @if($students->count()== 0)
                         <div class="alert alert-danger">Opps! no data found</div>
                         @else
                          <!-- table start -->
                          <div class="bd bd-gray-300 rounded table-responsive">
                            <table class="table table-bordered text-center table-striped ">
                                    <thead class="">
                                    
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>
                                    </thead>
                                    <tbody>
                                      @foreach($students as $student)
                                        <tr>
                                        <td>{{ $student->name }}</td>
                                        <td>
                                            @if ( !is_null($student->image) )
                                              <img src="{{ asset('backend/img/students/' .$student->image)}}" class="table-image">
                                            @else
                                             not uploaded
                                            @endif
                                        </td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->phone }}</td>
                                        <td>{{ $student->address }}</td>
                                        <td>{{ $student->gender }}</td>
                                        <td>{{ $student->role }}</td>
                                        <td>
                                        <div class="action-bar">
                                    <ul>
                                        <li><a href="{{ route('student.edit', $student->id) }}"><i class="fa fa-edit"></i></a></li>
                                        <li><a href="" data-toggle="modal" data-target="#delete{{ $student->id }}"><i class="fa fa-trash" ></i></a></li>
                                    </ul>
                                    </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="delete{{ $student->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Want to delete?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                            <ul>
                                                <li>
                                                <form action="{{ route('student.destroy', $student->id) }}" method="post">
                                                    @csrf
                                                    <input type="submit" value="Confirm" name="anything" class="btn btn-danger">

                                                </form>
                                                </li>
                                                <br>
                                                <li>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                </li>
                                            </ul>
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
                         <!-- table end -->

                         @endif

                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection