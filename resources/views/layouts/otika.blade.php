
<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('otika_asset/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('otika_asset/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('otika_asset/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('otika_asset/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href="{{asset('otika_asset/img/favicon.ico')}}" />
    <!-- Custom icone style CSS -->
    <link rel="stylesheet" href="{{asset('codeblaze_asset/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/sweetalert2.css')}}">
    <link rel="stylesheet" href="{{asset('css/otikacustom.css')}}">
</head>

<body>
  {{-- <div class="loader"></div> --}}
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
              <span class="badge headerBadge1">
                6 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
					text-white"> <img alt="image" src="{{asset('otika_asset/img/users/user-1.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">John
                      Deo</span>
                    <span class="time messege-text">Please check your mail !!</span>
                    <span class="time">2 Min Ago</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
                  </span> <span class="dropdown-item-desc"> Template update is
                    available now! <span class="time">2 Min
                      Ago</span>
                  </span>
                </a>   
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
            
        <li class="dropdown">
           <a href="#" data-toggle="dropdown"
            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset('uploads/profile_photo/'.Auth::user()->user_photo)}}"
              class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
          <div class="dropdown-menu dropdown-menu-right pullDown">
            <div class="dropdown-title">{{Auth::user()->name }}</div>

            <a href="{{route('profile',Auth::user()->id)}}" class="dropdown-item has-icon"> <i class="far
                  fa-user"></i> Profile
            </a> 
            
            <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
              Activities
            </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
              Settings
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
             <i class="fas fa-sign-out-alt"></i>
              Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>

          </div>
        </li>

        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{asset('otika_asset/img/logo.png')}}" class="header-logo" /> <span
                class="logo-name">Otika</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>

            <li class="dropdown  @yield('home')" >
              <a href="{{route('home')}}" class="nav-link"><i data-feather="users"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown   @yield('banner')">
              <a href="{{route('banner')}}" class="nav-link"><i data-feather="monitor"></i><span>Banner</span></a>
            </li>

            <li class="dropdown   @yield('resume')">
              <a href="{{route('resume')}}" class="nav-link"><i data-feather="monitor"></i><span>Resume</span></a>
            </li>

            <li class="dropdown   @yield('service')">
              <a href="{{route('service')}}" class="nav-link"><i data-feather="monitor"></i><span>Service</span></a>
            </li>

            <li class="dropdown   @yield('skill')">
              <a href="{{route('skill')}}" class="nav-link"><i data-feather="monitor"></i><span>Skill</span></a>
            </li>

            <li class="dropdown   @yield('ourproject')">
              <a href="{{route('ourproject')}}" class="nav-link"><i data-feather="monitor"></i><span>Our Project</span></a>
            </li>

            <li class="dropdown   @yield('blog')">
              <a href="{{route('blog')}}" class="nav-link"><i data-feather="monitor"></i><span>Our Blog</span></a>
            </li>

            <li class="dropdown   @yield('counter')">
              <a href="{{route('counter')}}" class="nav-link"><i data-feather="monitor"></i><span>Counter</span></a>
            </li>

            <li class="dropdown   @yield('freelanching')">
              <a href="{{route('freelanching')}}" class="nav-link"><i data-feather="monitor"></i><span>Freelanching</span></a>
            </li>

            <li class="dropdown   @yield('contact')">
              <a href="{{route('contact')}}" class="nav-link"><i data-feather="monitor"></i><span>Contact</span></a>
            </li>

            <li class="dropdown   @yield('clientmessage')">
              <a href="{{route('clientmessage')}}" class="nav-link"><i data-feather="monitor"></i><span>Client Message</span></a>
            </li>

            <li class="dropdown   @yield('aboutsetting')">
              <a href="{{route('aboutsetting')}}" class="nav-link"><i data-feather="settings"></i><span>About Setting</span></a>
            </li>

            <li class="dropdown   @yield('setting')">
              <a href="{{route('setting')}}" class="nav-link"><i data-feather="settings"></i><span> Setting</span></a>
            </li>
            
            <li class="dropdown   @yield('footer')">
              <a href="{{route('footer')}}" class="nav-link"><i data-feather="settings"></i><span> Footer</span></a>
            </li>

            <li class="menu-header">UI Elements</li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
             @yield('content')
            <!-- add content here -->
          </div>
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Templateshub</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{asset('otika_asset/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{asset('otika_asset/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('otika_asset/js/custom.js')}}"></script>
  <script src="{{asset('js/sweetalert2.js')}}"></script>
  <script src="{{asset('js/defoult.js')}}"></script>
  <script src="{{asset('js/projectundubtn.js')}}"></script>
  <script src="{{asset('js/free_btn.js')}}"></script>
  {{-- <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script> --}}
  @yield('footer_scrtipt_add')
  {{-- <script>
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script> --}}
  
</body>


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
</html>