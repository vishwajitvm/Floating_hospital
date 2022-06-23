@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
@endphp
{{-- @dd($prefix) ; check which prefix is calling now --}}  

  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href=" {{ Route('dashboard') }}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{asset('backend/images/logo/logo.png')}}" style="width: 40%" alt="">
						  {{-- <h3><b class="text-success"> The <span class="text-warning">Floating</span> </b> Hospital</h3> --}}
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{ ($route == 'dashboard')?'active':'' }}">
          <a href=" {{ Route('dashboard') }} ">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview {{ ($prefix == '/users')?'active':'' }} " >
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Manage User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('user.view')}} "><i class="ti-more"></i>View User</a></li>
            <li><a href="{{ route('users.add') }} "><i class="ti-more"></i>Add User</a></li>
            {{-- <li> <a href="{{ route('user.managerequest') }} "><i class="ti-more"></i> Manage Request </a> </li>
            <li> <a href=" {{ Route('user.inactiveusers') }} "><i class="ti-more"></i> Inactive User </a> </li> --}}

          </ul>
        </li> 

        {{-- <li class="treeview {{ ($prefix == '/employee')?'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Employee</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{Route('employee.view')}}"><i class="ti-more"></i>View</a></li>
            <li><a href="mailbox_compose.html"><i class="ti-more"></i>Add</a></li>
          </ul>
        </li> --}}


		  
        <li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{Route('profile.view')}} "><i class="ti-more"></i>Your Profile</a></li>
            <li><a href=" {{Route('password.view')}} "><i class="ti-more"></i>Change Password</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/manage-location')?'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Location</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{Route('manage-location.add')}}"><i class="ti-more"></i>Add Location</a></li>
            <li><a href="{{Route('manage-location.view')}}"><i class="ti-more"></i>View Location</a></li>
          </ul>
        </li>


        <li class="treeview {{ ($prefix == '/admin-department')?'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Department</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{Route('admin-department.add')}}"><i class="ti-more"></i>Add Department</a></li>
            <li><a href="mailbox_compose.html"><i class="ti-more"></i>View Department</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/attendence-management')?'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Attendence</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ Route('attendence-management.add') }}"><i class="ti-more"></i>Add</a></li>
            <li><a href="{{ Route('attendence-management.viewall') }}"><i class="ti-more"></i>View all</a></li>
            <li><a href="{{ Route('attendence-management.view-today') }}"><i class="ti-more"></i>View Todays</a></li>
          </ul>
        </li>


        {{-- <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="mailbox_inbox.html"><i class="ti-more"></i>Inbox</a></li>
            <li><a href="mailbox_compose.html"><i class="ti-more"></i>Compose</a></li>
            <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>Read</a></li>
          </ul>
        </li> --}}
		  
		<li class="header nav-small-cap">EXTRA</li>		  
		  
		<li>
          <a href="{{Route('admin.logout')}}">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
  </aside>

 


