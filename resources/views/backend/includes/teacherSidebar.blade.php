<div class="br-logo"><a href=""><span>[</span>Dynamic <i>Assignment</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      
      
      <ul class="br-sideleft-menu">
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
            <li class="sub-item"><a href="{{ url('all-course') }}" class="sub-link">Show All Course</a></li>
           
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Create Assignment</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ url('create-assignment') }}" class="sub-link">Add New Assignment</a></li>
            <li class="sub-item"><a href="{{ url('') }}" class="sub-link">Manage All Assignment</a></li>
           
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Create group</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ url('new-group') }}" class="sub-link">Add New group</a></li>
            <li class="sub-item"><a href="{{ url('view-new-group') }}" class="sub-link">Manage group</a></li>
           
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
        </ul>

     
    </div>