<!DOCTYPE HTML>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dolphin Cove</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
<x-header />
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-6 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Planing Trip To Anywhere in The World?</h1>	
						</div>
						<div class="col-md-6 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Book Your Trip</h3>
											<form action="/dashboard" method="post">
												@csrf
												<div class="row form-group">
													<div class="col-md-6">
														<label for="fullname">First Name</label>
														<input type="text" id="first_name" name='first_name' class="form-control">
													</div>
													<div class="col-md-6">
														<label for="fullname">Last Name</label>
														<input type="text" id="last_name" name='last_name' class="form-control">
													</div>
													
														<div class="col-md-4">
															<label for="dob">Date of Birth</label>
															<input type="text" id="dob" name='dob' class="form-control">
														</div>
														<div class="col-md-4">
															<label for="adult">Adult</label>
															<input type="number" id="adult" value='1' min='1' class="form-control">
														</div>
														<div class="col-md-4">
															<label for="child">Children</label>
															<input type="number" id="child" value='0' class="form-control">
														</div>
													
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Programmes</label>
														<select name="activities" id="activities" class="form-control">
															@forelse ($program as $p)
																<option value="{{$p->Program_ID}}">{{$p->Program_Name}}</option>
															@empty
																<option>--No Activity--</option>
															@endforelse
															
															
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="destination">Tour</label>
														<select name="destination" id="destination" class="form-control">
															@forelse ($tour as $t)
																<option value="{{$t->Tour_ID}}">{{$t->Tour_Com_Name}}</option>
															@empty
																<option>--No Tours--</option>
															@endforelse
														</select>
													</div>
												</div>
												
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Date Travel</label>
														<input type="text" id="date-start" name='date_travel' class="form-control">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Submit">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row" style="display:flex flex-wrap:wrap">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Most Popular Programmes</h2>
					<p>Down below you will see a few of our most visited Programmes by you, our valid customers.</p>
				</div>
			</div>
			<div class="container flex flex-wrap" >

				<div class="col-lg-4 col-md-4 col-sm-6" style="height: 20px;">
					<a href="images/dem.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class=""></i></div>
							<img src="images/dem.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Dolphin Encounter Memories</h2>
							<p>With this packages you can interact with the dolphins while swimming in the deep. Enjoy a kiss, try a dance, perhaps you will get a splash or two and have a real up close experience.</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6" style="height: 20px;">
					<a href="images/dwam.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class=""></i></div>
							<img src="images/dwam.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Dolphin Swim Adventure Memories</h2>
							<p>With this packages you can interact with the dolphins while swimming in the deep. Enjoy a kiss, try a dance, perhaps you will get a splash or two and have a real up close experience.</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/drs.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class=""></i></div>
							<img src="images/drs.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Dolphin Royal Swim Memories</h2>
							<p>You participate in a brief presentation after which, you enter the world of these amazing creatures. Swim with two dolphins as they interact with you in our beautiful cove.</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>


				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/yasd.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class=""></i></div>
							<img src="images/yasd.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Dolphin Swim Adventure</h2>
							<p>You will be surprised by the speed and agility of your new Dolphin friend as you ride on his belly or through the water on a boogie board. Learn fun facts about this species and about its ecosystem. It will be an incredible adventure!</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6" style="height: 20px;">
					<a href="images/yasd.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class=""></i></div>
							<img src="images/se.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Shark Encounter</h2>
							<p>You get a rare opportunity to meet the most fascinating and fearsome of all sea creatures the shark. Guests get the chance to hold, touch, feed and explore by swimming in the same water as these sharks.</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6" >
					<a href="images/dsa.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class=""></i></div>
						 <img src="images/dsa.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Dolphin Royal Swim</h2>
							<p>Swim with two dolphins as they interact with you in our beautiful Jamaican Cove. Can you name a better way to celebrate your Jamaican vacation than at Dolphin Cove in Ocho Rios?</p>
							<p><span class="btn btn-primary">Schedule a Trip</span></p>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>
	
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>How It Works</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>1</i>
						</span>
						<h3>Lorem ipsum dolor sit amet</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>2</i>
						</span>
						<h3>Consectetur adipisicing elit</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>3</i>
						</span>
						<h3>Dignissimos asperiores vitae</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				

			</div>
		</div>
	</div>


	
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About Us</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Destination</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Europe</a></li>
							<li><a href="#">Australia</a></li>
							<li><a href="#">Asia</a></li>
							<li><a href="#">Canada</a></li>
							<li><a href="#">Dubai</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Hotels</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Luxe Hotel</a></li>
							<li><a href="#">Italy 5 Star hotel</a></li>
							<li><a href="#">Dubai Hotel</a></li>
							<li><a href="#">Deluxe Hotel</a></li>
							<li><a href="#">BoraBora Hotel</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@freehtml5.co</a></li>
							<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

