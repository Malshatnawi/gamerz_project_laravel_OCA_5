@extends('layout.users_layouts.Newfeeds_Layout')

@section('content')



<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>GAMERZ SOCIAL NETWORK</title>
    <link rel="icon" href="{{asset('theme/images/logo.png')}}" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="{{asset('theme/css/main.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('themecss/responsive.css')}}">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	
	<div class="responsive-header">
		
		
	
			
	
							
								
		
	<section>
	
	
			<div class="container-fluid">
			@if(Auth::check())
			<!-- {{$name = Auth::user()->name}}-->
        	<!-- {{$image = Auth::user()->image}} -->
            <!-- {{$role = Auth::user()->role}} -->
            <!-- {{$email = Auth::user()->email}} -->
				<div class="row merged">

					<div class="col-lg-2 col-sm-3">
						<div class="user-avatar">
							<figure>
								<img src="images/resources/user-avatar.jpg" alt="">
								<form class="edit-phto">
									<i class="fa fa-camera-retro"></i>
									<label class="fileContainer">
										Edit Display Photo
										<input type="file"/>
									</label>
								</form>
							</figure>
						</div>
					</div>
					<div class="col-lg-10 col-sm-9">
						<div class="timeline-info">
							<ul>
								<li class="admin-name">
								  <h5>Janice Griffith</h5>
								  <span>Group Admin</span>
								</li>
								<li>
									<a class="active" href="time-line.html" title="" data-ripple="">time line</a>
									<a class="" href="timeline-photos.html" title="" data-ripple="">Photos</a>
									<a class="" href="timeline-videos.html" title="" data-ripple="">Videos</a>
									<a class="" href="timeline-friends.html" title="" data-ripple="">Friends</a>
									<a class="" href="timeline-groups.html" title="" data-ripple="">Groups</a>
									<a class="" href="about.html" title="" data-ripple="">about</a>
									<a class="" href="#" title="" data-ripple="">more</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			@endif
			</div>
		</div>
	</section><!-- top area -->
		
	<section>
		<div style="background-color:#39004d">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
									
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
											
										</ul>
									</div><!-- Shortcuts -->
									
									
								</aside>
							</div><!-- sidebar -->

                            
							
							<div class="col-lg-6">

                            @if(Auth::check())
                            <!-- {{$user= (auth()->user())}} -->
								<div class="central-meta">
									<div class="new-postbox">
										<figure>
											<img src='{{asset("images/$user->image")}}' alt="">
										</figure>
										<div class="newpst-input">                                   
											<form method="post" action="/posts/create/{{$category}}" enctype="multipart/form-data">
												<textarea rows="2" placeholder="write something" name="post_desc"></textarea>
												@csrf
												<div class="attachments">
													<ul>
														
														<li>
															<i class="fa fa-image"></i>
															<label class="fileContainer">
																<input type="file" name="image">
															</label>
														</li>
                                                        
														
														
														<li>
															<button type="submit">Post</button>
														</li>
													</ul>
												</div>
											</form>
										</div>
									</div>
                                    
								</div>

                                @endif
                            

                                



                                <div class="loadMore">




                                @yield('posts')
                                <!-- WRITE POSTS HERE -->







                                
								<!-- <div class="central-meta item">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img src="{{asset('theme/images/resources/friend-avatar10.jpg')}}" alt="">
											</figure>
											<div class="friend-name">
												<ins><a href="time-line.html" title="">Janice Griffith</a></ins>
												<span>published: june,2 2018 19:PM</span>
											</div>
											<div class="post-meta">
												<img src="{{asset('theme/images/resources/user-post.jpg')}}" alt="">
												<div class="we-video-info">
													<ul>
														<li>
															<span class="views" data-toggle="tooltip" title="views">
																<i class="fa fa-eye"></i>
																<ins>1.2k</ins>
															</span>
														</li>
														<li>
															<span class="comment" data-toggle="tooltip" title="Comments">
																<i class="fa fa-comments-o"></i>
																<ins>52</ins>
															</span>
														</li>
														<li>
															<span class="like" data-toggle="tooltip" title="like">
																<i class="ti-heart"></i>
																<ins>2.2k</ins>
															</span>
														</li>
														<li>
															<span class="dislike" data-toggle="tooltip" title="dislike">
																<i class="ti-heart-broken"></i>
																<ins>200</ins>
															</span>
														</li>
														<li class="social-media">
															<div class="menu">
															  <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
																</div>
															  </div>
																<div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
																</div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
																</div>
															  </div>

															</div>
														</li>
													</ul>
												</div>
												<div class="description">
													
													<p>
														World's most beautiful car in Curabitur <a href="#" title="">#test drive booking !</a> the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website
													</p>
												</div>
											</div>
										</div>
										<div class="coment-area">
											<ul class="we-comet">
												<li>
													<div class="comet-avatar">
														<img src="{{asset('theme/images/resources/comet-1.jpg')}}" alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="time-line.html" title="">Jason borne</a></h5>
															<span>1 year ago</span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
														</div>
														<p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
													</div>
													<ul>
														<li>
															<div class="comet-avatar">
																<img src="{{asset('theme/images/resources/comet-2.jpg')}}" alt="">
															</div>
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="time-line.html" title="">alexendra dadrio</a></h5>
																	<span>1 month ago</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																</div>
																<p>yes, really very awesome car i see the features of this car in the official website of <a href="#" title="">#Mercedes-Benz</a> and really impressed :-)</p>
															</div>
														</li>
														<li>
															<div class="comet-avatar">
																<img src="{{asset('theme/images/resources/comet-3.jpg')}}" alt="">
															</div>
															<div class="we-comment">
																<div class="coment-head">
																	<h5><a href="time-line.html" title="">Olivia</a></h5>
																	<span>16 days ago</span>
																	<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
																</div>
																<p>i like lexus cars, lexus cars are most beautiful with the awesome features, but this car is really outstanding than lexus</p>
															</div>
														</li>
													</ul>
												</li>
												<li>
													<div class="comet-avatar">
														<img src="{{asset('theme/images/resources/comet-1.jpg')}}" alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="time-line.html" title="">Donald Trump</a></h5>
															<span>1 week ago</span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
														</div>
														<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel
															<i class="em em-smiley"></i>
														</p>
													</div>
												</li>
												<li>
													<a href="#" title="" class="showmore underline">more comments</a>
												</li>
												<li class="post-comment">
													<div class="comet-avatar">
														<img src="{{asset('theme/images/resources/comet-1.jpg')}}" alt="">
													</div>
													<div class="post-comt-box">
														<form method="post">
															<textarea placeholder="Post your comment"></textarea>
															<div class="add-smiles">
																<span class="em em-expressionless" title="add icon"></span>
															</div>
															<div class="smiles-bunch">
																<i class="em em---1"></i>
																<i class="em em-smiley"></i>
																<i class="em em-anguished"></i>
																<i class="em em-laughing"></i>
																<i class="em em-angry"></i>
																<i class="em em-astonished"></i>
																<i class="em em-blush"></i>
																<i class="em em-disappointed"></i>
																<i class="em em-worried"></i>
																<i class="em em-kissing_heart"></i>
																<i class="em em-rage"></i>
																<i class="em em-stuck_out_tongue"></i>
															</div>
															<button type="submit"></button>
														</form>	
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div> -->
								<!-- <div class="central-meta item">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img src="{{asset('theme/images/resources/nearly1.jpg')}}" alt="">
											</figure>
											<div class="friend-name">
												<ins><a href="time-line.html" title="">Sara Grey</a></ins>
												<span>published: june,2 2018 19:PM</span>
											</div>
											<div class="post-meta">
												<iframe width="" height="315" src="https://www.youtube.com/embed/5JJ_jqqpTMY" allow="autoplay;" allowfullscreen></iframe>
												<div class="we-video-info">
													<ul>
														<li>
															<span class="views" data-toggle="tooltip" title="views">
																<i class="fa fa-eye"></i>
																<ins>1.2k</ins>
															</span>
														</li>
														<li>
															<span class="comment" data-toggle="tooltip" title="Comments">
																<i class="fa fa-comments-o"></i>
																<ins>52</ins>
															</span>
														</li>
														<li>
															<span class="like" data-toggle="tooltip" title="like">
																<i class="ti-heart"></i>
																<ins>2.2k</ins>
															</span>
														</li>
														<li>
															<span class="dislike" data-toggle="tooltip" title="dislike">
																<i class="ti-heart-broken"></i>
																<ins>200</ins>
															</span>
														</li>
														<li class="social-media">
															<div class="menu">
															  <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
																</div>
															  </div>
																<div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
																</div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
																</div>
															  </div>

															</div>
														</li>
													</ul>
												</div>
												<div class="description">
													
													<p>
														Lonely Cat Enjoying in Summer Curabitur <a href="#" title="">#mypage</a> ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,
													</p>
												</div>
											</div>
										</div>
										<div class="coment-area">
											<ul class="we-comet">
												<li>
													<div class="comet-avatar">
														<img src="{{asset('theme/images/resources/comet-1.jpg')}}" alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="time-line.html" title="">Jason borne</a></h5>
															<span>1 year ago</span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
														</div>
														<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
													</div>

												</li>
												<li>
													<div class="comet-avatar">
														<img src="{{asset('theme/images/resources/comet-2.jpg')}}" alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="time-line.html" title="">Sophia</a></h5>
															<span>1 week ago</span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
														</div>
														<p>we are working for the dance and sing songs. this video is very awesome for the youngster.
															<i class="em em-smiley"></i>
														</p>
													</div>
												</li>
												<li>
													<a href="#" title="" class="showmore underline">more comments</a>
												</li>
												<li class="post-comment">
													<div class="comet-avatar">
														<img src="{{asset('theme/images/resources/comet-2.jpg')}}" alt="">
													</div>
													<div class="post-comt-box">
														<form method="post">
															<textarea placeholder="Post your comment"></textarea>
															<div class="add-smiles">
																<span class="em em-expressionless" title="add icon"></span>
															</div>
															<div class="smiles-bunch">
																<i class="em em---1"></i>
																<i class="em em-smiley"></i>
																<i class="em em-anguished"></i>
																<i class="em em-laughing"></i>
																<i class="em em-angry"></i>
																<i class="em em-astonished"></i>
																<i class="em em-blush"></i>
																<i class="em em-disappointed"></i>
																<i class="em em-worried"></i>
																<i class="em em-kissing_heart"></i>
																<i class="em em-rage"></i>
																<i class="em em-stuck_out_tongue"></i>
															</div>
															<button type="submit"></button>
														</form>	
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div> -->
								<!-- <div class="central-meta item">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img src="{{asset('theme/images/resources/nearly6.jpg')}}" alt="">
											</figure>
											<div class="friend-name">
												<ins><a href="time-line.html" title="">Sophia</a></ins>
												<span>published: january,5 2018 19:PM</span>
											</div>
											<div class="post-meta">
												<div class="post-map">
													<div class="nearby-map">
														<div id="map-canvas"></div>
													</div>
												</div>
												<div class="we-video-info">
													<ul>
														<li>
															<span class="views" data-toggle="tooltip" title="views">
																<i class="fa fa-eye"></i>
																<ins>1.2k</ins>
															</span>
														</li>
														<li>
															<span class="comment" data-toggle="tooltip" title="Comments">
																<i class="fa fa-comments-o"></i>
																<ins>52</ins>
															</span>
														</li>
														<li>
															<span class="like" data-toggle="tooltip" title="like">
																<i class="ti-heart"></i>
																<ins>2.2k</ins>
															</span>
														</li>
														<li>
															<span class="dislike" data-toggle="tooltip" title="dislike">
																<i class="ti-heart-broken"></i>
																<ins>200</ins>
															</span>
														</li>
														<li class="social-media">
															<div class="menu">
															  <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
																</div>
															  </div>
																<div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
																</div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
																</div>
															  </div>

															</div>
														</li>
													</ul>
												</div>
												<div class="description">
													
													<p>
														Curabitur Lonely Cat Enjoying in Summer <a href="#" title="">#mypage</a> ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,
													</p>
												</div>
											</div>
										</div>
										<div class="coment-area">
											<ul class="we-comet">
												<li>
													<div class="comet-avatar">
														<img src="{{asset('theme/images/resources/comet-1.jpg')}}" alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="time-line.html" title="">Jason borne</a></h5>
															<span>1 year ago</span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
														</div>
														<p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
													</div>

												</li>
												<li>
													<div class="comet-avatar">
														<img src="{{asset('theme/images/resources/comet-2.jpg')}}" alt="">
													</div>
													<div class="we-comment">
														<div class="coment-head">
															<h5><a href="time-line.html" title="">Sophia</a></h5>
															<span>1 week ago</span>
															<a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
														</div>
														<p>we are working for the dance and sing songs. this video is very awesome for the youngster.
															<i class="em em-smiley"></i>
														</p>
													</div>
												</li>
												<li>
													<a href="#" title="" class="showmore underline">more comments</a>
												</li>
												<li class="post-comment">
													<div class="comet-avatar">
														<img src="{{asset('theme/images/resources/comet-2.jpg')}}" alt="">
													</div>
													<div class="post-comt-box">
														<form method="post">
															<textarea placeholder="Post your comment"></textarea>
															<div class="add-smiles">
																<span class="em em-expressionless" title="add icon"></span>
															</div>
															<div class="smiles-bunch">
																<i class="em em---1"></i>
																<i class="em em-smiley"></i>
																<i class="em em-anguished"></i>
																<i class="em em-laughing"></i>
																<i class="em em-angry"></i>
																<i class="em em-astonished"></i>
																<i class="em em-blush"></i>
																<i class="em em-disappointed"></i>
																<i class="em em-worried"></i>
																<i class="em em-kissing_heart"></i>
																<i class="em em-rage"></i>
																<i class="em em-stuck_out_tongue"></i>
															</div>
															<button type="submit"></button>
														</form>	
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div> -->
								<!-- <div class="central-meta item">
									<div class="user-post">
										<div class="friend-info">
											<figure>
												<img alt="" src="{{asset('theme/images/resources/friend-avatar10.jpg')}}">
											</figure>
											<div class="friend-name">
												<ins><a title="" href="time-line.html">Janice Griffith</a></ins>
												<span>published: june,2 2018 19:PM</span>
											</div>
											<div class="description">
													
													<p>
														Curabitur World's most beautiful car in <a title="" href="#">#test drive booking !</a> the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website
													</p>
												</div>
											<div class="post-meta">
												<div class="linked-image align-left">
													<a title="" href="#"><img alt="" src="{{asset('theme/images/resources/page1.jpg')}}"></a>
												</div>
												<div class="detail">
													<span>Love Maid - ChillGroves</span>
													<p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... </p>
													<a title="" href="#">www.sample.com</a>
												</div>		
												<div class="we-video-info">
													<ul>
														<li>
															<span class="views" data-toggle="tooltip" title="views">
																<i class="fa fa-eye"></i>
																<ins>1.2k</ins>
															</span>
														</li>
														<li>
															<span class="comment" data-toggle="tooltip" title="Comments">
																<i class="fa fa-comments-o"></i>
																<ins>52</ins>
															</span>
														</li>
														<li>
															<span class="like" data-toggle="tooltip" title="like">
																<i class="ti-heart"></i>
																<ins>2.2k</ins>
															</span>
														</li>
														<li>
															<span class="dislike" data-toggle="tooltip" title="dislike">
																<i class="ti-heart-broken"></i>
																<ins>200</ins>
															</span>
														</li>
														<li class="social-media">
															<div class="menu">
															  <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
																</div>
															  </div>
																<div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
																</div>
															  </div>
															  <div class="rotater">
																<div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
																</div>
															  </div>

															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div> -->
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
									
								</aside>
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

	
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
	
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('theme/js/main.min.js')}}"></script>
	<script src="{{asset('theme/js/script.js')}}"></script>


								  
@endsection

