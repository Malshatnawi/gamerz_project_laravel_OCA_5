<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Gamerz</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="{{asset('theme/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/responsive.css')}}">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	
	<div class="responsive-header">
		<div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
			<span class="mh-text">
				<a href="newsfeed.html" title=""><img src="{{asset('theme/images/logo2.png')}}" alt=""></a>
			</span>
			<span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
			</span>
		</div>
		<div class="mh-head second">
			<form class="mh-form">
				<input placeholder="search" />
				<a href="#/" class="fa fa-search"></a>
			</form>
		</div>
		<nav id="menu" class="res-menu">
			<ul>
				<li><a href="{{ route('index')}}" title="">Home</a></li>
				<li><a href="{{ route('allcategories')}}" title="">Categories</a></li>
				<li><a href="{{ route('allevents')}}" title="">Events</a></li>

				@if(Auth::check())

				<li><a href="{{ route('logout') }}" title="">Logout</a></li>

				@else

				<li><a href="{{ route('login') }}" title="">Login</a></li>
				<li><a href="{{ route('register') }}" title="">Register</a></li>


				@endif
			</ul>
		</nav>
		
	</div><!-- responsive header -->
	
	<div class="topbar stick">
		<div class="logo mr-2">
			<a title="" href="newsfeed.html"><img src="{{asset('theme/images/gamerzlogo.png')}}" alt=""></a>
		</div>
		
		<div class="top-area">
			<div class="top-search">
				<form method="post" class="">
					<input type="text" placeholder="Search...">
					<button data-ripple><i class="ti-search"></i></button>
				</form>
			</div>
			<ul class="">
			<li style="line-height:3em">
			<a href="{{route ('index')}}" title="Home" data-ripple=""><i class="ti-home"></i></a>

			</li>
			<li style="line-height:3em">
			<a href="{{route ('allevents')}}" title="Events" data-ripple=""><i class="ti-calendar"></i></a>

			</li>

			<li style="line-height:3em">
			<a href="{{route ('allcategories')}}" title="Categories" data-ripple=""><i class="ti-layout-grid2"></i></a>

			</li>

			@if(Auth::check())
			<!-- {{$id = Auth::id()}}-->
			<!-- {{$name = Auth::user()->name}}-->
        	<!-- {{$image = Auth::user()->image}} -->
            <!-- {{$role = Auth::user()->role}} -->
            <!-- {{$email = Auth::user()->email}} -->

			<li style="line-height:2.5em">
			<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>

			<li style="line-height:2.5em">
			<a href="{{route('singlepage', $id)}}"><img src='{{asset("images/$image")}}' height='30em' width='30em' alt=""></a>
				<span class="status f-online"></span>
			
			</li>
			@else

			<li style="line-height:3em">
			<a href="{{route ('login')}}" title="Login" data-ripple="">Login</a>
			</li>

			<li style="line-height:3em">
			<a href="{{route ('register')}}" title="Login" data-ripple="">Register</a>
			</li>


			@endif

				<!-- <li>
					<a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
					<div class="dropdowns">
						<span>5 New Messages</span>
						<ul class="drops-menu">
							<li>
								<a href="notifications.html" title="">
									<img src="{{asset('theme/images/resources/thumb-1.jpg')}}" alt="">
									<div class="mesg-meta">
										<h6>sarah Loren</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag green">New</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="{{asset('theme/images/resources/thumb-2.jpg')}}" alt="">
									<div class="mesg-meta">
										<h6>Jhon doe</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag red">Reply</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="{{asset('theme/images/resources/thumb-3.jpg')}}" alt="">
									<div class="mesg-meta">
										<h6>Andrew</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag blue">Unseen</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="{{asset('theme/images/resources/thumb-4.jpg')}}" alt="">
									<div class="mesg-meta">
										<h6>Tom cruse</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
							<li>
								<a href="notifications.html" title="">
									<img src="{{asset('theme/images/resources/thumb-5.jpg')}}" alt="">
									<div class="mesg-meta">
										<h6>Amy</h6>
										<span>Hi, how r u dear ...?</span>
										<i>2 min ago</i>
									</div>
								</a>
								<span class="tag">New</span>
							</li>
						</ul>
						<a href="messages.html" title="" class="more-mesg">view more</a>
					</div>
				</li> -->
				<!-- <li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
					<div class="dropdowns languages">
						<a href="#" title=""><i class="ti-check"></i>English</a>
						<a href="#" title="">Arabic</a>
						<a href="#" title="">Dutch</a>
						<a href="#" title="">French</a>
					</div>
				</li> -->
			</ul>


			<!-- @if(Auth::check()) -->
			<!-- {{$id = Auth::id()}}-->
			<!-- {{$name = Auth::user()->name}}-->
        	<!-- {{$image = Auth::user()->image}} -->
            <!-- {{$role = Auth::user()->role}} -->
            <!-- {{$email = Auth::user()->email}} -->

			<div class="user-img">
				<!-- <a href="{{route('singlepage', $id)}}"><img src='{{asset("images/$image")}}' height='30em' width='30em' alt=""></a>
				<span class="status f-online"></span> -->
				<!-- <div class="user-setting">
					<a href="{{route('singlepage', $id)}}" title=""><i class="ti-user"></i> view profile</a>
					<a href="#" title=""><i class="ti-target"></i>activity log</a>
					<a href="#" title=""><i class="ti-settings"></i>account setting</a>
					<a href="#" title=""><i class="ti-power-off"></i>log out</a>
				</div> -->
				
			</div>
			
			@endif
			
			<!-- <span class="ti-menu main-menu" data-ripple=""></span> -->
		</div>
	</div><!-- topbar -->
	
	
	
	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row" id="page-contents">
					<div class="col-lg-3">
						<aside class="sidebar static">
							<div class="widget">
								<h4 class="widget-title">Socials</h4>
								<ul class="socials">
									<li class="facebook">
										<a title="" href="#"><i class="fa fa-facebook"></i> <span>facebook</span> <ins></ins></a>
									</li>
									<li class="twitter">
										<a title="" href="#"><i class="fa fa-twitter"></i> <span>twitter</span><ins></ins></a>
									</li>
									<li class="google">
										<a title="" href="#"><i class="fa fa-google"></i> <span>google</span><ins></ins></a>
									</li>
								</ul>
							</div>
							<div class="widget stick-widget">
								<h4 class="widget-title">Shortcuts</h4>
								<ul class="naves">
                                <li>
												<i class="ti-clipboard"></i>
												<a href="https://www.worldcubeassociation.org/" title="">World Cube Association </a>
											</li>
											<li>
												<i class="ti-mouse-alt"></i>
												<a href="https://www.chess.com/article/view/how-to-set-up-a-chessboard" title="">Chess.com</a>
											</li>
											<li>
												<i class="ti-files"></i>
												<a href="https://steamcommunity.com/app/872990" title="">Stream Community</a>
											</li>
											<li>
												<i class="ti-user"></i>
												<a href="https://www.ea.com/en-gb/games/fifa/fifa-19/compete/events/community-tournament-guidelines" title="">EA Sports</a>
											</li>

											<li>
												<i class="ti-user"></i>
												<a href="https://lichess.org/" title="">Free Online Chess</a>
											</li>

											<li>
												<i class="ti-mouse-alt"></i>
												<a href="https://cs-online.club/en/servers" title="">Counter-Strike Online Server</a>
											</li>

											<li>
												<i class="ti-user"></i>
												<a href="https://rubikscu.be/" title="">Rubiks Online</a>
											</li>

											<li>
												<i class="ti-user"></i>
												<a href="https://www.ea.com/games/fifa/news/fifa-online-4-ea-champions-cup-winter-2018-overview" title="">Fifa 2018</a>
											</li>

											<li>
												<i class="ti-mouse-alt"></i>
												<a href="https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/" title="">Steam Power</a>
											</li>
								</ul>
							</div><!-- Shortcuts -->
						</aside>	
					</div>
					<div class="col-lg-9">
						<div class="blog-sec right-pading">
							
							<div class="row">
							@foreach($categories as $category)



								<div class="col-lg-5 col-sm-6">
									<div class="g-post-classic">
										<figure>
										<a href="posts/{{$category->id}}"><img height="400em" width="400em" src='{{asset("images/cat_images/$category->cat_image")}}'></a>
											
										<div class="g-post-meta">
											<div class="post-title">
											<h5>{{$category->cat_name}}</h5>
											

											<p>
    {{ str_limit($category->cat_desc, 100, '') }}
    @if (strlen($category->cat_desc) > 100)
        <span id="dots">...</span>
        <span id="more">{{ substr(	$category->cat_desc, 100) }}</span>
    @endif
</p>

<button onclick="myFunction()" id="myBtn" class="btn btn-primary">Read more</button>
    
										
											

											
											</div>	
										
										</div>
									</div>
								</div>

								<script>
		function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
    }
}</script>
								@endforeach
								
								
								
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="widget">
						<div class="foot-logo">
							<div class="logo">
								<a href="index-2.html" title=""><img src="images/gamerzlogo.png" alt=""></a>
							</div>	
							<p>
								The trio took this simple idea and built it into the world’s leading carpooling platform.
							</p>
						</div>
						<ul class="location">
							<li>
								<i class="ti-map-alt"></i>
								<p>33 new montgomery st.750 san francisco, CA USA 94105.</p>
							</li>
							<li>
								<i class="ti-mobile"></i>
								<p>+1-56-346 345</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="widget">
						<div class="widget-title"><h4>follow</h4></div>
						<ul class="list-style">
							<li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
							<li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en" title="">twitter</a></li>
							<li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en" title="">instagram</a></li>
							<li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
							<li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/" title="">Pintrest</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="widget">
						<div class="widget-title"><h4>Navigate</h4></div>
						<ul class="list-style">
							<li><a href="about.html" title="">about us</a></li>
							<li><a href="contact.html" title="">contact us</a></li>
							<li><a href="terms.html" title="">terms & Conditions</a></li>
							<li><a href="#" title="">RSS syndication</a></li>
							<li><a href="sitemap.html" title="">Sitemap</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="widget">
						<div class="widget-title"><h4>useful links</h4></div>
						<ul class="list-style">
							<li><a href="#" title="">leasing</a></li>
							<li><a href="#" title="">submit route</a></li>
							<li><a href="#" title="">how does it work?</a></li>
							<li><a href="#" title="">agent listings</a></li>
							<li><a href="#" title="">view All</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="widget">
						<div class="widget-title"><h4>download apps</h4></div>
						<ul class="colla-apps">
							<li><a href="https://play.google.com/store?hl=en" title=""><i class="fa fa-android"></i>android</a></li>
							<li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i class="ti-apple"></i>iPhone</a></li>
							<li><a href="https://www.microsoft.com/store/apps" title=""><i class="fa fa-windows"></i>Windows</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- footer -->
	<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
					<i><img src="images/credit-cards.png" alt=""></i>
				</div>
			</div>
		</div>
	</div>
</div>	
	
	<script src="{{asset('theme/js/main.min.js')}}"></script>
	<script src="{{asset('theme/js/strip.pkgd.min.js')}}"></script>
	<script src="{{asset('theme/js/script.js')}}"></script>
	

</body>	

</html>