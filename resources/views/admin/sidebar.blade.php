<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand" href="{{url('/')}}"><span class="text-primary">One</span>-Health</a>
      <a class="sidebar-brand brand-logo-mini" href="{{url('/')}}"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
      
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
     
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('add_doctor_view')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Add Doctor</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('showappointment')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Appointments</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('showdoctor')}}">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">All Doctors</span>
        </a>
      </li>

    </ul>
  </nav>