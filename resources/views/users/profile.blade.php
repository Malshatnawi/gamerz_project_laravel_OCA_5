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
		<div class="feature-photo">
			<figure><img src="{{asset('theme/css/images/resources/11.jfif')}}"  alt=""></figure>
	
		
			<div class="container-fluid">
				<div class="row merged">
					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure>
                                <img src='{{asset("images/$user->image")}}' alt="">


                                @if (Auth::id() == $user->id)

<button type="button" id="myBtn"> <i class="fa fa-camera-retro"></i></button>

@endif

							</figure>
						</div>
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
								  <h5>{{$user->name}}</h5>
								
								</li>
								<!-- <li>
									<a class="active" href="time-line.html" title="" data-ripple="">time line</a>
									<a class="" href="timeline-photos.html" title="" data-ripple="">Photos</a>
									<a class="" href="timeline-videos.html" title="" data-ripple="">Videos</a>
									<a class="" href="timeline-friends.html" title="" data-ripple="">Friends</a>
									<a class="" href="timeline-groups.html" title="" data-ripple="">Groups</a>
									<a class="" href="about.html" title="" data-ripple="">about</a>
									<a class="" href="#" title="" data-ripple="">more</a>
								</li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- top area -->
		
	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
											<h4 class="widget-title">bio</h4>
											<ul >
												<li >
												name:{{$user->name}}
												</li>
												<li >
												 email:{{$user->email}}	
												</li>
												<li>
												phone:{{$user->phone}}	
												</li>
											</ul>
										</div>
                                        <div class="widget">
										<h4 class="widget-title">Other Websites</h4>
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
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="loadMore">
									<div class="central-meta item">
                                    
															<!-- <h3>Hi I am {{$user->name}} welcome to my profile 
																</h3> -->
															<!-- <h3>contact me <i class="fa fa-hand-o-down" aria-hidden="true"></i>
																</h3>
														<h3> email:{{$user->email}}</h3>
														<h3>phone:{{$user->phone}}</h3> -->
														<!-- <h3><i class="fa fa-facebook-square" aria-hidden="true"></i> -->
														<!-- <i class="fa fa-instagram" aria-hidden="true"></i>
														<i class="fa fa-twitter-square" aria-hidden="true"></i></h3>
														 -->
									</div><!-- add post new box -->
									
									<div class="central-meta item">
										<div class="user-post">
											<div class="friend-info">
												<figure>
													<img src='{{asset("images/$user->image")}}'  alt="">
												</figure>
												<div class="friend-name">
													<ins><a href="time-line.html" title="">{{$user->name}}</a></ins>
													<span>{{$post->created_at}}</span>
												</div>
                                                <div class="description" style="background-color:#f5f5f5">
													
													<h3>
                                                    {{$post->post_desc}}
													</h3>
												</div>
												<div class="post-meta">
													<img src='{{asset("images/$post->post_image")}}' alt="">
													
													
												</div>
											</div>
											<div class="coment-area">
											<ul class="we-comet">

												@foreach($comment as $key1 => $value1)
												@if($value1['post_id'] == $post->id)

												<!-- {{$commenter = $all_users[($value1['user_id']) - 1]}} -->
												
												<li>
													<div class="comet-avatar">
														<img src='{{asset("images/$commenter->image")}}' alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="{{route('singlepage', $commenter->id)}}" title="">{{$commenter['name']}}</a></h5>
															<span>{{$value1['created_at']}}</span>
															@if (Auth::id() == $commenter->id || Auth::id() == $user1->id) 
															<form action="/comments/{{$value1['id']}}" method="post">
															@method('Delete')
															@csrf
															<button style="background-color:#d9534f	" type="submit"><i class="ti-trash "></i></button>
	  														</form>
															@endif
														</div>
														<p>{{$value1['comment_description']}}
															
														</p>
													</div>
												</li>
												@endif

												@endforeach
												
												<li>
													<a href="#" title="" class="showmore underline">more comments</a>
												</li>
												@if(Auth::check())
												<!-- {{$user2= (auth()->user())}} -->
												<li class="post-comment">
													<div class="comet-avatar">
														<img src='{{asset("images/$user2->image")}}' alt="">
													</div>
													<div class="post-comt-box">
														<form method="post" action="/comments/create/{{$post->id}}">
														@csrf
															<textarea placeholder="Post your comment" name="comment_description"></textarea>
															
															
															<button type="submit" class="btn btn-primary btn-lg bg-primary">Comment</button>
														</form>	
													</div>

												</li>
												@endif
												</ul>
												</div>
											
										</div>
									</div>
								
								</div>
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
										<div class="banner medium-opacity bluesh">
											<div style="background-image: url(images/resources/baner-widgetbg.jpg)" class="bg-image"></div>
											<div class="baner-top">
												<span><img src="{{asset('theme/images/book-icon.png')}}" alt=""></span>
												<i class="fa fa-ellipsis-h"></i>
											</div>
											<div class="banermeta">
												<p>
													create your own favourit page.
												</p>
												<span>like them all</span>
												<a href="#" title="" data-ripple="">start now!</a>
											</div>
										</div>											
									</div>
                                    <div class="widget">
										<div class="banner medium-opacity reddish">
											<div class="bg-image" style="background-image: url({{asset('theme/images/resources/ad2.jpg')}})"></div>
											
											<div class="banermeta">
												<p>
													Buy it now and GET 30% Offer
												</p>
												<span>Limited Quantities</span>
												<a data-ripple="" title="" href="#">Visit us</a>
											</div>
										</div>											
									</div>
									
									
								</aside>
							</div><!-- sidebar -->
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
								<a href="index-2.html" title=""><img src="{{asset('theme/images/logo.png')}}" alt=""></a>
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
					<i><img src="{{asset('theme/images/credit-cards.png')}}" alt=""></i>
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
    			<!-- The Modal -->
						<div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
		<form class="edit-phto" style="position:static" method="post" action="/updatePic/{{$user->id}}" enctype="multipart/form-data">
		
        @csrf
            <div class="mb-3">
			<label for="image"><b>image</b></label>
             <input type="file" class="form-control-file"  name="image">
            </div>
          
            <button type="submit" class="btn btn-primary">Submit</button>
    
      
       
      </form>
    </div>
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal
      btn.onclick = function () {
        modal.style.display = "block";
      };

      // When the user clicks on <span> (x), close the modal
      span.onclick = function () {
        modal.style.display = "none";
      };

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };
    </script>
    <script data-cfasync="false" src="{{asset('theme/css/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="js/main.min.js"></script>
	<script src="{{asset('theme/css/js/script.js')}}"></script>

</body>	

</html>