<!-- ########## START: LEFT PANEL ########## -->
<div class="br-logo"><a href=""><span>[</span>Dynamic <i>Assignment</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      
      
      <ul class="br-sideleft-menu">
        @if(\Request::is('admin-dashboard'))
        <li class="br-menu-item">
          <a href="{{ url('admin-dashboard') }}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a>
          
        </li><!-- br-menu-item -->

        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Admin Management</label>
        <li class="br-menu-item">
          <a href="" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Teacher/Student approve</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ url('unapproved-list-view') }}" class="sub-link">User list</a></li>
           
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Session</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ url('create-session') }}" class="sub-link">Add New session</a></li>
            <li class="sub-item"><a href="{{ url('store-session') }}" class="sub-link">Manage All Assignment</a></li>
           
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Course</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ url('create-course') }}" class="sub-link">Add New Course</a></li>
            <li class="sub-item"><a href="{{ url('all') }}" class="sub-link">Manage All Course</a></li>
           
          </ul>
        </li>
        
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Section</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{url('section')}}" class="sub-link">Add New Section</a></li>
            <li class="sub-item"><a href="card-social.html" class="sub-link">Manage All Section</a></li>
           
          </ul>
        </li>
        
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Course Assign</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ url('create-course-assign') }}" class="sub-link">Add New information</a></li>
            <li class="sub-item"><a href="{{ url('all-course-assign') }}" class="sub-link">Manage All </a></li>
           
          </ul>
        </li>
        
        
        

        @elseif(\Request::is('teacher-dashboard'))
        <a href="{{ url('teacher-dashboard') }}" class="br-menu-link active">
          <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
          <span class="menu-item-label">Dashboard</span>
        </a>

        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Teacher Management</label>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Course</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ url('all') }}" class="sub-link">Show All Course</a></li>
           
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Create Assignment</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ url('create-session') }}" class="sub-link">Add New Assignment</a></li>
            <li class="sub-item"><a href="{{ url('') }}" class="sub-link">Manage All Assignment</a></li>
           
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Create group</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ url('') }}" class="sub-link">Add New group</a></li>
            <li class="sub-item"><a href="{{ url('') }}" class="sub-link">Manage group</a></li>
           
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub
          @if( Route::is('student.manage') || Route::is('student.create') || Route::is('student.edit')) active @endif">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Enroll</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            
            <li class="sub-item"><a href="{{route('student.manage')}}" class="sub-link @if(Route::is('student.manage')) active @endif">Show Student</a></li>
           
          </ul>
        </li>
        

        @else
        <a href="{{ url('student-dashboard') }}" class="br-menu-link active">
          <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
          <span class="menu-item-label">Dashboard</span>
        </a>
        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Student Management</label>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub
          @if( Route::is('student.manage') || Route::is('student.create') || Route::is('student.edit')) active @endif">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Enrollment</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{url('create-enroll')}}" class="sub-link @if(Route::is('student.create')) active @endif">Add New enroll</a></li>
            <li class="sub-item"><a href="{{route('student.manage')}}" class="sub-link @if(Route::is('student.manage')) active @endif">Manage All enroll</a></li>
           
          </ul>
        </li>
       
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Assignment</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ url('create-session') }}" class="sub-link">Add New Assignment</a></li>
            <li class="sub-item"><a href="{{ url('') }}" class="sub-link">Manage All Assignment</a></li>
           
          </ul>
        </li>
        @endif
      
      </ul><!-- br-sideleft-menu -->

     
    </div><!-- br-sideleft -->
