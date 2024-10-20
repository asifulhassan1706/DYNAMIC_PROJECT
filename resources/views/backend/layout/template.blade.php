
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.includes.header')
    @include('backend.includes.css')

    
  </head>

  <body>
  @if(\Request::is('admin-dashboard'))

    @include('backend.includes.adminSidebar')
    @endif
   
    @if(\Request::is('unapproved-list-view') or \Request::is('create-session') or \Request::is('session') or \Request::is('create-course') or \Request::is('all') or \Request::is('section') or \Request::is('create-course-assign') or \Request::is('all-course-assign') )

   @include('backend.includes.adminSidebar')

  @elseif(\Request::is('student-dashboard'))
    @include('backend.includes.studentSidebar')
    @endif
   
    @if(\Request::is('create-enroll') or \Request::is('enroll_all')  )

   @include('backend.includes.studentSidebar')

  @elseif(\Request::is('teacher-dashboard'))
    @include('backend.includes.teacherSidebar')
    @endif
   
    @if(\Request::is('') or \Request::is('') or \Request::is('') or \Request::is('') or \Request::is('') or \Request::is('') )

    @include('backend.includes.teacherSidebar')
    
  @endif

  



    <!-- ########## START: HEAD PANEL ########## -->
    @include('backend.includes.topbar')
    <!-- ########## END: HEAD PANEL ########## -->

    

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      @yield('body-content')
      
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    @include('backend.includes.script')
  </body>
</html>
