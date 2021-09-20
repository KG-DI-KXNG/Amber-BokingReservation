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

	<!-- Bootstrap Icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Javascript for popup pay now -->
	<script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>

	<!-- Tailwind Css -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- JavaScript -->
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
	<!-- Bootstrap theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	





	
<x-header />

	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url('https://images.unsplash.com/photo-1607153333879-c174d265f1d2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80')">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					




					{{-- <div class="alertify  ajs-movable ajs-closable ajs-pinnable ajs-pulse"><div class="ajs-dimmer"></div><div class="ajs-modal" tabindex="0"><div class="ajs-dialog" tabindex="0"><button class="ajs-reset"></button><div class="ajs-commands"><button class="ajs-pin"></button><button class="ajs-maximize"></button><button class="ajs-close"></button></div><div class="ajs-header">Whoops! Something went wrong..</div><div class="ajs-body"><div class="ajs-content">
						<i class="fas fa-times-circle"></i> errors.multiple													<ul>
						<li>The first name field is required.</li>
						<li>The last name field is required.</li>
						<li>The dob field is required.</li>
						<li>The date travel field is required.</li>
					</ul>
				</div></div><div class="ajs-footer"><div class="ajs-auxiliary ajs-buttons"></div><div class="ajs-primary ajs-buttons"><button class="ajs-button ajs-ok">OK</button></div></div><div class="ajs-handle"></div><button class="ajs-reset"></button></div></div></div> --}}




				
					<div class="row row-mt-15em" >
						<div class="col-md-6 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Planing Trip To Anywhere in The World?</h1>	
						</div>
						<div class="col-md-6 col-md-push-1 animate-box" style="margin-top: -80px;" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<div class="hidden" >
												@if(count($errors) > 0 )
												<div class="alert alert-danger" id='error'>
													@if(count($errors) == 1)
													<i class="fas fa-times-circle"></i> {{$errors->first()}}
													@else
													<i class="fas fa-times-circle"></i> @lang('errors.multiple')
													<ul>
													@foreach ($errors->all() as $error)
													<li>{{ $error }}</li>
													@endforeach
												</ul>
												@endif
												</div>
												@endif
											</div>
											
											@if (Session::has('success'))
												<div class="alert alert-success">
													<i class="fas fa-check-circle"></i> {{ Session::get('success') }}
												</div>
												@endif
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
															<input type="number" id="adult" name="adult" value='1' min='1' class="form-control">
														</div>
														<div class="col-md-4">
															<label for="child">Children</label>
															<input type="number" id="child" name='child'
															value='0' class="form-control">
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
															<option selected> </option>
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
														<label for="hotel">Hotel</label>
														<select name="hotel" id="hotel" class="form-control">
															<option selected> </option>
															@forelse ($hotel as $h)
																<option value="{{$h->Hotel_Name}}">{{$h->Hotel_Name}}</option>
															@empty
																<option>--No Hotel--</option>
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
														<input data-toggle="modal" data-target="#pay" class="btn btn-primary btn-block" value="Submit">
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
	</header>

	<!-- Popup Pay Now Card -->

	<div class="modal fade" id="pay" tabindex="-1" role="dialog" aria-labelledby="pay" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			
			  
			  
			</div>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true" class="text-red-500 text-9xl ">&times;</span>
			  </button>            
          </div>
      
          <div class="m-4">
			<div class="credit-card w-full sm:w-auto shadow-lg mx-auto rounded-xl bg-white" x-data="creditCard">
			  <header class="flex flex-col justify-center items-center">
				<div
				  class="relative"
				  x-show="card === 'front'"
				  x-transition:enter="transition ease-out duration-300"
				  x-transition:enter-start="opacity-0 transform scale-90"
				  x-transition:enter-end="opacity-100 transform scale-100"
				>
				  <img class="w-full h-auto" src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/svg-cards/card-visa-front.png" alt="front credit card">
				  <div class="front bg-transparent text-lg w-full text-white px-12 absolute left-0 bottom-12">
					<p class="number mb-5 sm:text-xl" x-text="cardNumber !== '' ? cardNumber : '0000 0000 0000 0000'"></p>
					<div class="flex flex-row justify-between">
					  <p x-text="cardholder !== '' ? cardholder : 'Card holder'"></p>
					  <div class="">
						<span x-text="expired.month"></span>
						<span x-show="expired.month !== ''">/</span>
						<span x-text="expired.year"></span>
					  </div>
					</div>
				  </div>
				</div>
				<div
				  class="relative"
				  x-show="card === 'back'"
				  x-transition:enter="transition ease-out duration-300"
				  x-transition:enter-start="opacity-0 transform scale-90"
				  x-transition:enter-end="opacity-100 transform scale-100"
				>
				  <img class="w-full h-auto" src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/svg-cards/card-visa-back.png" alt="">
				  <div
					class="bg-transparent text-white text-xl w-full flex justify-end absolute bottom-20 px-8  sm:bottom-24 right-0 sm:px-12"
				  >
					<div class="border border-white w-16 h-9 flex justify-center items-center">
					  <p x-text="securityCode !== '' ? securityCode : 'code'"></p>
					</div>
				  </div>
				</div>
				<ul class="flex">
				  <li class="mx-2">
					<img class="w-16" src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/computop.png" alt="" />
				  </li>
				  <li class="mx-2">
					<img class="w-14" src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/verified-by-visa.png" alt="" />
				  </li>
				  <li class="ml-5">
					<img class="w-7" src="https://www.computop-paygate.com/Templates/imagesaboutYou_desktop/images/mastercard-id-check.png" alt="" />
				  </li>
				</ul>
			  </header>
			  <main class="mt-4 p-4">
				<h1 class="text-xl font-semibold text-gray-700 text-center">Card payment</h1>
				<div class="">
					<div id="totalPrice">

					</div>
				  <div class="my-3">
					<input
					  type="text"
					  class="block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
					  name="card_holder"
					  placeholder="Card holder"
					  maxlength="22"
					  x-model="cardholder"
					/>
				  </div>
				  <div class="my-3">
					<input
					  type="text"
					  class="block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
					  name="card_number"
					  placeholder="Card number"
					  x-model="cardNumber"
					  x-on:keydown="format()"
					  x-on:keyup="isValid()"
					  maxlength="19"
					/>
				  </div>
				  <div class="my-3 flex flex-col">
					<div class="mb-2">
					  <label for="" class="text-gray-700">Expired</label>
					</div>
					<div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
					  <select
						id=""
						name="card_month"
						class="form-select appearance-none block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
						x-model="expired.month"
					  >
						<option value="" selected disabled>MM</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
					  </select>
					  <select
						name="card_year"
						id=""
						class="form-select appearance-none block w-full px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
						x-model="expired.year"
					  >
						<option value="" selected disabled>YY</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
						<option value="2026">2026</option>
					  </select>
					  <input
						type="text"
						name="card_cvv"
						class="block w-full col-span-2 px-5 py-2 border rounded-lg bg-white shadow-lg placeholder-gray-400 text-gray-700 focus:ring focus:outline-none"
						placeholder="Security code"
						maxlength="3"
						x-model="securityCode"
						x-on:focus="card = 'back'"
						x-on:blur="card = 'front'"
					  />
					</div>
				  </div>
				</div>
			  </main>
			  <footer class="mt-6 p-4">
				<button
				  class="submit-button px-4 py-3 rounded-full bg-blue-300 text-blue-900 focus:ring focus:outline-none w-full text-xl font-semibold transition-colors"
				  x-bind:disabled="!isValid"
				  x-on:click="onSubmit()"
				>
				  Pay now
				</button>
			  </footer>
			</div>
		  </div>

        </form>
        </div>
      </div>  
	  
	 
	
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

