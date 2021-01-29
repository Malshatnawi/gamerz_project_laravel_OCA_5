<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>EndGam - Gaming Magazine Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="{{asset('asset/img/favicon.ico')}}" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('asset/css/slicknav.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('asset/css/animate.css')}}"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{asset('asset/css/style.css')}}"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section  pt-0   position-relative" style="background-color:black">
		<div class="header-warp ">
			
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="{{ route('index')}}" class="site-logo">
					<img src="{{asset('asset/img/logo.png')}}" height='100em' width="100em" alt="">
				</a>
				<nav class="top-nav-area w-100">
				@if(Auth::check())
					<div class="user-panel">
					<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
					</div>
				@else
					<div class="user-panel">
						<a href="{{ route('login')}}">Login</a> / <a href="{{ route('register')}}">Register</a>
					</div>
				@endif
					<!-- Menu -->
					<!-- {{$id= Auth::id()}} -->
					<ul class="main-menu primary-menu">
						<li><a href="{{ route('index')}}">Home</a></li>
						<li><a href="{{route('allevents')}}">Events</a>
							
						</li>
						<li><a href="{{route('allcategories')}}">Categories</a></li>
						@if(Auth::check())
						<li><a href="{{route('singlepage', $id)}}">Profile</a></li>
						@else
						<li><a href="{{ route('login')}}">Profile</a></li>
						@endif

					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->
	@yield('content')

	<!-- Hero section -->

	<!-- Hero section end-->


	<!-- Intro section -->
	
	<!-- Intro section end -->


	<!-- Blog section -->
	
	<!-- Blog section end -->


	<!-- Intro section -->



	<!-- Featured section -->
	
	<!-- Featured section end-->



	<!-- Newsletter section -->
	
	<!-- Newsletter section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="footer-left-pic">
				
			</div>
			<div class="footer-right-pic">
				<img src="{{asset('asset/img/footer-right-pic.png')}}" alt="">
			</div>
			<a href="#" class="footer-logo">
				<img src="{{asset('asset/img/logo.png')}}" alt="">
			</a>
			<ul class="main-menu footer-menu">
				<li><a href="">Home</a></li>
				<li><a href="">Events</a></li>
				<li><a href="">Categories</a></li>
				<li><a href="">Profile</a></li>
			</ul>
			<div class="footer-social d-flex justify-content-center">
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
			<div class="copyright"><a href="">Colorlib</a> 2018 @ All rights reserved</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('asset/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('asset/js/jquery.slicknav.min.js')}}"></script>
	<script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('asset/js/jquery.sticky-sidebar.min.js')}}"></script>
	<script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('asset/js/main.js')}}"></script>

	</body>
</html>
