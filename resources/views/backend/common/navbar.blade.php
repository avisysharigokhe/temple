
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Vidyapati</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link {{ (Request::is('dashboard') ? 'active' : '') }} ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('events')}}" class="nav-link {{ (Request::is('events') || Request::is('add-event') ? 'active' : '') }} ">
              <i class="nav-icon fa fa-calendar-o" aria-hidden="true"></i>
              <p>
                Events/Functions
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('news')}}" class="nav-link {{ (Request::is('news') || Request::is('add-news') ? 'active' : '') }} ">
              <i class="nav-icon fa fa-newspaper-o"></i>
              <p>
                News & Announcement
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview ">
            <a href="{{url('aboutus')}}" class="nav-link ">
              <i class="nav-icon fa fa-info"></i>
              <p>
                About Us
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: {{ (Request::is('about_vidyapati') ||  Request::is('about_temple') ? 'block' : '')  }}">
              <li class="nav-item">
                <a href="{{url('about_vidyapati')}}" class="nav-link {{ (Request::is('about_vidyapati') ? 'active' : '') }}">
                  <i class="fa fa-info nav-icon"></i>
                  <p>About Vidyapati</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('about_temple')}}" class="nav-link {{ (Request::is('about_temple') ? 'active' : '') }}">
                  <i class="fa fa-info nav-icon"></i>
                  <p>About Temple</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{url('history')}}" class="nav-link {{ (Request::is('history') ? 'active' : '') }}">
              <i class="nav-icon fa fa-history"></i>
              <p>
                History
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('literatur')}}" class="nav-link {{ (Request::is('about_vidyapati') ? 'active' : '') }}">
              <i class="nav-icon fa fa-book"></i>
              <p>
                E Literatur
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview ">
            <a href="{{url('gallery')}}" class="nav-link  {{ (Request::is('gallery') ? 'active' : '') }}">
              <i class="nav-icon fa fa-image"></i>
              <p>
                Media Gallery
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('photos')}}" class="nav-link  {{ (Request::is('photos') ? 'active' : '') }}">
                  <i class="fa fa-image nav-icon"></i>
                  <p>Photo Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('videos')}}" class="nav-link {{ (Request::is('videos') ? 'active' : '') }}">
                  <i class="fa fa-video-camera nav-icon"></i>
                  <p>Video Gallery</p>
                </a>
              </li>
              
            </ul>
          </li>

           <li class="nav-item has-treeview ">
            <a href="{{url('contact_us')}}" class="nav-link  {{ (Request::is('contact_us') ? 'active' : '') }}">
              <i class="nav-icon fa fa-mobile"></i>
              <p>
                Contact Us
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('address')}}" class="nav-link  {{ (Request::is('address') ? 'active' : '') }}">
                  <i class="fa fa-location-arrow nav-icon"></i>
                  <p>Address</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('location')}}" class="nav-link {{ (Request::is('location') ? 'active' : '') }}">
                  <i class="fa fa-map-marker nav-icon"></i>
                  <p>Google Map location</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{url('nearby')}}" class="nav-link {{ (Request::is('nearby') ? 'active' : '') }}">
              <i class="nav-icon fa fa-area-chart"></i>
              <p>
                Places Around/Near By
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('nearby')}}" class="nav-link {{ (Request::is('nearby') ? 'active' : '') }}">
              <i class="nav-icon fa fa-bus"></i>
              <p>
                How to Reach
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('profile')}}" class="nav-link {{ (Request::is('profile') ? 'active' : '') }}">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('logout')}}" class="nav-link ">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>