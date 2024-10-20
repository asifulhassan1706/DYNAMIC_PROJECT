<div class="br-logo"><a href=""><span>[</span>Dynamic <i>Assignment</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      
      
      <ul class="br-sideleft-menu">
      <a href="{{ url('student-dashboard') }}" class="br-menu-link active">
          <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
          <span class="menu-item-label">Dashboard</span>
        </a>
        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Student Management</label>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub
          @if( Route::is('create-enroll') || Route::is('enroll_all')) active @endif">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Enrollment</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ url('create-enroll') }}" class="sub-link">Add New enroll</a></li>
          <li class="sub-item"><a href="{{ url('enroll_all') }}" class="sub-link">Manage All enroll</a></li>
          </ul>
        </li>

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Assignment</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ url('all-assignment') }}" class="sub-link">Manage All Assignment</a></li>
           
          </ul>
        </li>
        </ul>

     
    </div>