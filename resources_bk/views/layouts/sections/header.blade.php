@section('header')

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     <!--  <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li> -->
    
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
 

     
      <!-- Notifications Dropdown Menu -->
   <!--    <li class="nav-item dropdown">
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
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->


       <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link"  href="{{ route('signout') }}">
        <!-- <a class="nav-link" data-toggle="dropdown" href="{{ route('signout') }}"> -->
          <!-- <i class="far fa-user"></i> -->
          Logout
        </a>
       <!--  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          
            <div class="media">
             
              <div class="media-body">
                <h3 class="dropdown-item-title">
                   Welcome ! {{ Auth::user()->name }}
                
                </h3>
               
              </div>
            </div>
           
          </a>
          
          <div class="dropdown-divider"></div>
          <a href="{{ route('signout') }}" class="dropdown-item dropdown-footer">Logout</a>
        </div> -->
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      Admin Panel 
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      
          <!-- <li class="nav-item menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li> -->
         
     
          <li class="nav-item">
            <a href="{{ route('mobile-registration') }}" class="{{ (request()->segment(1) == 'mobile-registration') ? 'nav-link active' : 'nav-link' }}">
              <i class="nav-icon fa fa-registered"></i>
              <p>
                Registration
              </p>
            </a>
          </li> 

         <!--  <li class="nav-item">
            <a href="{{ route('configuration') }}" class="nav-link">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                Configuration
              </p>
            </a>
          </li> -->

          <li class="nav-item">
            <a href="{{ route('authentication') }}" class="{{ (request()->segment(1) == 'authentication') ? 'nav-link active' : 'nav-link' }}">
              <i class="nav-icon fa fa-key"></i>
              <p>
                Authentication
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{route('authorization')}}" class="nav-link">
              <i class="nav-icon fa fa-credit-card"></i>
              <p>
                Payment Authorization
              </p>
            </a>
          </li> 
      
         
         <li class="nav-item">
            <a href="{{route('consent-sign')}}" class="{{ (request()->segment(1) == 'consent-sign') ? 'nav-link active' : 'nav-link' }}">
              <i class="nav-icon fa fa-credit-card"></i>
              <p>
                Consent Signature
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  
  @endsection
  <!-- /.content-wrapper -->
  @push('scripts-footer')

