@extends('backend.layout.template')

@section('body-content')
    <div class="br-pagetitle">
        <i class="icon ion-ios-home-outline"></i>
        <div>
          <h4>Update Student Information</h4>
          <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p>
        </div>
    </div>
    <div class="br-pagebody">
        <div class="row row-sm">
            <div class="col-sm-12">
                <div class="card shadow-base bd-0 overflow-hidden">
                    <div class="pd-x-25 pd-t-25">
                        <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1 mg-b-20">Create New Student</h6>
                        <form action="{{ route('student.update', $student->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Full Name</label>
                                    <input type="text" name="name" id="" class="form-control" required="required" value="{{$student->name}}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" id="" class="custom-file-input">
                                        <label class="custom-file-label custom-file-label-primary">choose file</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="">Email</label>
                                    <input type="email" name="email" id="" class="form-control" required="required" value="{{$student->email}}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" id="" class="form-control" value="{{$student->phone}}">
                                </div>
                                <div class="mb-3">
                                    <label for="">Address</label>
                                    <input type="text" name="address" id="" class="form-control" value="{{$student->address}}">
                                </div>
                                <div class="mb-3">
                            
                                <label for=""><strong>Gender: </strong></label><br>
                                <input type="radio" id="" name="gender" value="male" {{$student->gender=='male' ? 'checked' : ' '  }}>
                                 <label for="">male</label><br>
                                 <input type="radio" id="" name="gender" value="female" {{$student->gender=='female' ? 'checked' : ' '  }}>
                                 <label for="">female</label><br>
                                

                                </div>
                                <div class="mb-5">
                                    
                                    <input type="submit" name="updateStd" id="" class="btn btn-success" value="Update Student">
                                </div>


                         </form>
                                
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection