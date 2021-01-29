<!DOCTYPE html>
<html lang="en">




<head>
    <title>@yield('title')</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="CodedThemes">
      <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="CodedThemes">
      <!-- Favicon icon -->
      <link rel="icon" href="{{asset('assets/images/logo.ico')}}" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap/css/bootstrap.min.css')}}">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/themify-icons/themify-icons.css')}}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/icofont/css/icofont.css')}}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
  </head>

  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.html">
                            <img class="img-fluid" src="{{asset('assets/images/gamerzlogo.png')}}" width='100em' height='70em' alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                         <!-- {{$name = Auth::guard('admin')->user()->name}}-->
                                            <!-- {{$image = Auth::guard('admin')->user()->admin_image}} -->
                                            <!-- {{$role = Auth::guard('admin')->user()->role}} -->
                                            <!-- {{$email = Auth::guard('admin')->user()->email}} -->
                        <ul class="nav-right">
                          
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src='{{asset("images/$image")}}' class="img-radius" alt="User-Profile-Image">
                                    <span>{{$name}}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    
                                    <li>
                                        <a href="{{ route ('index')}}">
                                            <i class="ti-user"></i> Index
                                        </a>
                                    </li>
                                    
                                    
                                    <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40 img-radius" src='{{asset("images/$image")}}' alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span>{{$name}}</span>
                                        <span id="more-details">{{$role}}<i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                
                            </div>
                            
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="admin">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Manage Admins</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="category">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Manage Categories</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="posts">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Manage Posts</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="event">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Manage Events</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                    
                                
                            </ul>
                            

                                    
                                
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">

                                                @yield('main')

                                                <!-- row 1 in the body ...write here -->
                                        </div>

                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </div>
</body>
                    
<script type="text/javascript" src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/popper.js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('assets/js/modernizr/modernizr.js')}}"></script>
<!-- am chart -->
<script src="{{asset('assets/pages/widget/amchart/amcharts.min.js')}}"></script>
<script src="{{asset('assets/pages/widget/amchart/serial.min.js')}}"></script>
<!-- Todo js -->
<script type="text/javascript " src="{{asset('assets/pages/todo/todo.js')}} "></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('assets/pages/dashboard/custom-dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
<script type="text/javascript " src="{{asset('assets/js/SmoothScroll.js')}}"></script>
<script src="{{asset('assets/js/pcoded.min.js')}}"></script>
<script src="{{asset('assets/js/demo-12.js')}}"></script>
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
</body>

</html>
