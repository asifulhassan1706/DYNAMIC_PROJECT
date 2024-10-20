
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.includes.header')
    @include('backend.includes.css')

    
  </head>

  <body>

    @include('backend.includes.sidebar')

    <!-- ########## START: HEAD PANEL ########## -->
    @include('backend.includes.topbar')
    <!-- ########## END: HEAD PANEL ########## -->

    

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      @yield('body-content')
      @include('backend.includes.footer')
      
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    @include('backend.includes.script')
  </body>
</html>
