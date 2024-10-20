<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Login</h3>
            @if(Session::has('failure'))
                        <div class="alert alert-info">
                            <strong>{{ Session::get('failure') }}</strong> 
                        </div>
                        @endif

            <form  method="post" action="{{ url('store-login') }}">   {{ csrf_field() }}
           
            <div class="form-outline mb-4">
              <input type="email" id="typeEmailX-2" name="email" class="form-control form-control-lg" placeholder="Email" />
              <!-- <label class="form-label" for="typeEmailX-2">Email</label> -->
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" name="password"  class="form-control form-control-lg" placeholder=" Password" />
              <!-- <label class="form-label" for="typePasswordX-2">Password</label> -->
            </div>
          
            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>
            <div class="login-register d-flex justify-content-start mb-4">
              <label class="form-check-label" for="form1Example3"> If you are not registered <a href="{{ url('register') }}"> Register here</a></label>
            </div>
            

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

            

            <hr class="my-4">

            <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
              type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
            <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;"
              type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>

          </div>
        </div>
      </div>
    </div>
            </form>
  </div>
</section>
</body>
</html>