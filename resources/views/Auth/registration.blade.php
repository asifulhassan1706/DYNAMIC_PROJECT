<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset('/style.css') }}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<section class="vh-100 py-5" style="background-color: #508bfc;">
  <div class="container">

<div class="row w-100 mx-0">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="bg-light d-flex justify-content-center">
                    <button class="tab-btn rounded-0 w-100  login-tab active">Teacher</button>
                    <button class="tab-btn rounded-0 w-100  register-tab">Student</button>
                </div>
            </div>
        </div>
    </div>
    <!-- registration for student -->
    <div class="col-md-6 mx-auto login-box bg-white">
        <div class="auth-form-light py-3 ">

            <h4 class="text-center">Teacher Registration</h4>
            @if(Session::has('info'))
                        <div class="alert alert-info">
                            <strong>{{ Session::get('info') }}</strong> 
                        </div>
                        @endif
            <h6 class="font-weight-light text-center pb-3">Signing up is easy. It only takes a few steps.</h6>
            <form  method="post" action="{{ url('store-register_teacher') }}">   {{ csrf_field() }}
            <div class="form-outline mb-4">
              <input type="text" name="name" id="typeEmailX-2" class="form-control bg-white border text-left w-100 form-control-lg" placeholder="Enter your Name" />
              <!-- <label class="form-label" for="typeEmailX-2">Email</label> -->
            </div>
            <div class="form-outline mb-4">
              <input type="email" name="email" id="typeEmailX-2" class="form-control w-100 form-control-lg" placeholder="Email" />
              <!-- <label class="form-label" for="typeEmailX-2">Email</label> -->
            </div>
            
            <div class="form-outline mb-4">
              <input type="text" name="contact" id="typeEmailX-2" class="form-control bg-white border text-left w-100 form-control-lg" placeholder="Enter Contact Number" />
              <!-- <label class="form-label" for="typeEmailX-2">Email</label> -->
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password" id="typePasswordX-2" class="form-control w-100 form-control-lg" placeholder=" Password" />
              <!-- <label class="form-label" for="typePasswordX-2">Password</label> -->
            </div>
            <div class="form-outline mb-4">
              <input type="password" name="confirm" id="typePasswordX-2" class="form-control w-100 form-control-lg" placeholder="Confirm Password" />
              <!-- <label class="form-label" for="typePasswordX-2">Password</label> -->
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>
            <div class="login-register d-flex justify-content-start mb-4">
            <label class="form-check-label" for="form1Example3"> If you are Student  <a href="{{ url('student_register') }}"> Click Here</a></label>
                            
                        </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>

            <hr class="my-4">

            <!-- <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"><i class="fab fa-google me-2"></i> Sign in with google <a href="{{ url('welcome') }}"></button>
            <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
              type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button> -->

          </div>
        </div>
      </div>
    </div>
            </form>
        </div>
    </div>
    <!-- registration for student -->
    <!-- registration for supervisor -->
    <div class="col-md-6 mx-auto register-box bg-white">
        <div class="auth-form-light py-3">
       
        <h4 class="text-center">Student Registration</h4>
        @if(Session::has('info'))
                        <div class="alert alert-info">
                            <strong>{{ Session::get('info') }}</strong> 
                        </div>
                        @endif

        <h6 class="font-weight-light text-center pb-3">Signing up is easy. It only takes a few steps.</h6>
        <form class="w-100 px-2"  method="post" action="{{ url('store-register_student') }}">   {{ csrf_field() }}
            <div class="form-outline mb-4">
              <input type="text" name="name" id="typeEmailX-2" class="form-control bg-white text-left border w-100 form-control-lg" placeholder="Enter your Name" />
              <!-- <label class="form-label" for="typeEmailX-2">Email</label> -->
            </div>
            <div class="form-outline mb-4">
              <input type="email" name="email" id="typeEmailX-2" class="form-control text-left w-100 form-control-lg" placeholder="Email" />
              <!-- <label class="form-label" for="typeEmailX-2">Email</label> -->
            </div>
            <div class="form-outline mb-4">
              <input type="text" name="contact" id="typeEmailX-2" class="form-control  bg-white border  text-left w-100 form-control-lg" placeholder="Enter Contact Number" />
              <!-- <label class="form-label" for="typeEmailX-2">Email</label> -->
            </div>

            <div class="form-outline mb-4">
              <input type="text" name="roll" id="typeEmailX-2" class="form-control  bg-white border  text-left w-100 form-control-lg" placeholder="Enter your Roll" />
              <!-- <label class="form-label" for="typeEmailX-2">Email</label> -->
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password" id="typePasswordX-2" class="form-control text-left bg-white form-control-lg" placeholder=" Password" />
              <!-- <label class="form-label" for="typePasswordX-2">Password</label> -->
            </div>
            <div class="form-outline mb-4">
              <input type="password" name="confirm" id="typePasswordX-2" class="form-control text-left bg-white form-control-lg" placeholder=" Confirm Password" />
              <!-- <label class="form-label" for="typePasswordX-2">Password</label> -->
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>
            <div class="login-register d-flex justify-content-start mb-4">
            <!-- <label class="form-check-label" for="form1Example3"> If you are Teacher  <a href="{{ url('teacher_register') }}"> Click Here</a></label> -->


                            
            <div>
            <label class="form-check-label" for="form1Example3"> If you are Register  <a href="{{ url('login') }}"> Login</a></label>

        </div>
                                
    </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>

            <!-- <hr class="my-4"> -->

            <!-- <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"><i class="fab fa-google me-2"></i> Sign in with google <a href="{{ url('welcome') }}"></button>
            <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
              type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button> -->

          </div>
        </div>
      </div>
    </div>
            </form>
        </div>
    </div>
    <!-- registration for supervisor -->
</div>
</div>
</section>
<script>
    $(document).ready(function () {
        $(".register-tab").click(function () {
            $(".register-box").show();
            $(".login-box").hide();
            $(".register-tab").addClass("active");
            $(".login-tab").removeClass("active");
        });
        
        $(".login-tab").click(function () {
            $(".login-box").show();
            $(".register-box").hide();
            $(".login-tab").addClass("active");
            $(".register-tab").removeClass("active");
        });
    });
</script>

</body>
</html>