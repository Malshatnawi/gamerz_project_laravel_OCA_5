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


    
    
    
    <!-- Slider Start Here -->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner" style="height: 700px;">
            <div class="carousel-item active">
                <img style="height: 700px; width: 100%" src="https://www.teahub.io/photos/full/212-2120981_counter-strike-global-offensive.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" >
                <img style="height: 700px; width: 100%" src="https://images.unsplash.com/photo-1540835296355-c04f7a063cbb?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NXx8cnViaWtzJTIwY3ViZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80https://www.wallpapers.net/chess-pieces-hd-wallpaper-for-desktop-mobiles/download/1500x500.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img style="height: 700px; width: 100%" src="https://cdna.artstation.com/p/assets/images/images/014/871/192/large/dumitrel-miron-final.jpg?1546952219" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
<hr>
    <!-- Slider End Here -->

    <!-- Category Start Here-->

    <h1 style="text-align: center" class="mt-5">Our Categories</h1>

    <div class="row">
        @foreach($categories as $category)
        <div class="col-sm-6 mb-3">
            <div class="card" style="height: 400px;">
                <img style=" max-width: 100%;
                max-height: 100%;
                display: block;" src="{{asset("images/cat_images/$category->cat_image")}}" class="card-img-top" height="50px" width="50px" alt="...">
            </div>
                <div class="card-body">
                    <a href="posts/{{$category->id}}"><h5 class="card-title">{{$category->cat_name}}</h5></a>
                    <p class="card-text">{{$category->cat_desc}}</p>
                </div>

        </div>
        @endforeach
    </div>
    <hr>
    <!-- Category end here -->

    <!-- Post Start Here -->
    <div class="mt-4">
        <h1 style="text-align: center; color:Blue" class="mb-5">Latest 3 Posts</h1>
    </div>

    <div class="col-lg-12">
	<div class="blog-sec right-pading">
							
	<div class="row">
    
    @foreach($postt as $post)
    <div class="col-lg-4 col-sm-6">
									<div class="g-post-classic" style="background-color:silver; height:10em">
										<figure>
											
										<div class="g-post-meta">
											<div class="post-title">
											<h5 style="font-weight:bold">Created at: {{$post->created_at}}</h5>
											

											<h5>
                                            <hr style="border: 0.25px solid white;">
    {{ str_limit($post->post_desc, 100, '') }}
    @if (strlen($post->post_desc) > 100)
        <span id="dots">...</span>
        <span id="more">{{ substr(	$post->post_desc, 100) }}</span>
    @endif
</h5>

<!-- <button onclick="myFunction()" id="myBtn" class="btn btn-primary">Read more</button> -->
    
										
											

											
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
    <hr>
    <!-- Post End Here -->
    <div>
        <h1 style="text-align: center">The Best Robic's Record in 2020</h1>
    </div>
{{--<div class="row">--}}
{{--    <div class="col-sm-12">--}}
{{--    <iframe--}}
{{--        style="height: 1000px ; width: 100%"--}}

{{--        src="https://www.youtube.com/embed/OGWuQj1OJ_Y"--}}
{{--    > </iframe>--}}
{{--    </div>--}}
{{--</div>--}}
<div style="background-color: #0b0b0b" class="mb-5">
    <iframe
        style="margin: 5% 18% ; width:1000px ; height:500px "


        src="https://www.youtube.com/embed/SaAELE9wyI4"
    > </iframe>

</div>





    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="widget">
                        <div class="foot-logo">
                            <div class="logo">
                                <a href="index-2.html" title=""><img src="images/logo.png" alt=""></a>
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
<div class="side-panel">
    <h4 class="panel-title">General Setting</h4>
    <form method="post">
        <div class="setting-row">
            <span>use night mode</span>
            <input type="checkbox" id="nightmode1"/>
            <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Notifications</span>
            <input type="checkbox" id="switch22" />
            <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Notification sound</span>
            <input type="checkbox" id="switch33" />
            <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>My profile</span>
            <input type="checkbox" id="switch44" />
            <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Show profile</span>
            <input type="checkbox" id="switch55" />
            <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
        </div>
    </form>
    <h4 class="panel-title">Account Setting</h4>
    <form method="post">
        <div class="setting-row">
            <span>Sub users</span>
            <input type="checkbox" id="switch66" />
            <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>personal account</span>
            <input type="checkbox" id="switch77" />
            <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Business account</span>
            <input type="checkbox" id="switch88" />
            <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Show me online</span>
            <input type="checkbox" id="switch99" />
            <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Delete history</span>
            <input type="checkbox" id="switch101" />
            <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Expose author name</span>
            <input type="checkbox" id="switch111" />
            <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
        </div>
    </form>
</div><!-- side panel -->

<script data-cfasync="false" src="{{asset('theme/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="js/main.min.js"></script>
<script src="{{asset('theme/js/script.js')}}"></script>
<script src="{{asset('theme/js/map-init.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>
