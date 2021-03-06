;(function () {
	
	'use strict';

	var mobileMenuOutsideClick = function() {

		$(document).click(function (e) {
	    var container = $("#gtco-offcanvas, .js-gtco-nav-toggle");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	    	$('.js-gtco-nav-toggle').addClass('gtco-nav-white');

	    	if ( $('body').hasClass('offcanvas') ) {

    			$('body').removeClass('offcanvas');
    			$('.js-gtco-nav-toggle').removeClass('active');
				
	    	}
	    
	    	
	    }
		});

	};

	var formTab = function() {

		$('.tab-menu a').on('click', function(event){
			var $this = $(this),
				data = $this.data('tab');

			$('.tab-menu li').removeClass('active');
			$this.closest('li').addClass('active')

			$('.tab .tab-content-inner').removeClass('active');
			$this.closest('.tab').find('.tab-content-inner[data-content="'+data+'"]').addClass('active');

			event.preventDefault();

		});

	};

	var offcanvasMenu = function() {

		$('#page').prepend('<div id="gtco-offcanvas" />');
		$('#page').prepend('<a href="#" class="js-gtco-nav-toggle gtco-nav-toggle gtco-nav-white"><i></i></a>');
		var clone1 = $('.menu-1 > ul').clone();
		$('#gtco-offcanvas').append(clone1);
		var clone2 = $('.menu-2 > ul').clone();
		$('#gtco-offcanvas').append(clone2);

		$('#gtco-offcanvas .has-dropdown').addClass('offcanvas-has-dropdown');
		$('#gtco-offcanvas')
			.find('li')
			.removeClass('has-dropdown');

		// Hover dropdown menu on mobile
		$('.offcanvas-has-dropdown').mouseenter(function(){
			var $this = $(this);

			$this
				.addClass('active')
				.find('ul')
				.slideDown(500, 'easeOutExpo');				
		}).mouseleave(function(){

			var $this = $(this);
			$this
				.removeClass('active')
				.find('ul')
				.slideUp(500, 'easeOutExpo');				
		});


		$(window).resize(function(){

			if ( $('body').hasClass('offcanvas') ) {

    			$('body').removeClass('offcanvas');
    			$('.js-gtco-nav-toggle').removeClass('active');
				
	    	}
		});
	};


	var burgerMenu = function() {

		$('body').on('click', '.js-gtco-nav-toggle', function(event){
			var $this = $(this);


			if ( $('body').hasClass('overflow offcanvas') ) {
				$('body').removeClass('overflow offcanvas');
			} else {
				$('body').addClass('overflow offcanvas');
			}
			$this.toggleClass('active');
			event.preventDefault();

		});
	};



	var contentWayPoint = function() {
		var i = 0;

		// $('.gtco-section').waypoint( function( direction ) {


			$('.animate-box').waypoint( function( direction ) {

				if( direction === 'down' && !$(this.element).hasClass('animated-fast') ) {
					
					i++;

					$(this.element).addClass('item-animate');
					setTimeout(function(){

						$('body .animate-box.item-animate').each(function(k){
							var el = $(this);
							setTimeout( function () {
								var effect = el.data('animate-effect');
								if ( effect === 'fadeIn') {
									el.addClass('fadeIn animated-fast');
								} else if ( effect === 'fadeInLeft') {
									el.addClass('fadeInLeft animated-fast');
								} else if ( effect === 'fadeInRight') {
									el.addClass('fadeInRight animated-fast');
								} else {
									el.addClass('fadeInUp animated-fast');
								}

								el.removeClass('item-animate');
							},  k * 200, 'easeInOutExpo' );
						});
						
					}, 100);
					
				}

			} , { offset: '85%' } );
		// }, { offset: '90%'} );
	};


	var dropdown = function() {

		$('.has-dropdown').mouseenter(function(){

			var $this = $(this);
			$this
				.find('.dropdown')
				.css('display', 'block')
				.addClass('animated-fast fadeInUpMenu');

		}).mouseleave(function(){
			var $this = $(this);

			$this
				.find('.dropdown')
				.css('display', 'none')
				.removeClass('animated-fast fadeInUpMenu');
		});

	};


	var owlCarousel = function(){
		
		var owl = $('.owl-carousel-carousel');
		owl.owlCarousel({
			items: 3,
			loop: true,
			margin: 20,
			nav: true,
			dots: true,
			smartSpeed: 800,
			autoHeight: true,
			navText: [
		      "<i class='ti-arrow-left owl-direction'></i>",
		      "<i class='ti-arrow-right owl-direction'></i>"
	     	],
	     	responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:3
	        }
	    	}
		});


		var owl = $('.owl-carousel-fullwidth');
		owl.owlCarousel({
			items: 1,
			loop: true,
			margin: 20,
			nav: true,
			dots: true,
			smartSpeed: 800,
			autoHeight: true,
			navText: [
		      "<i class='ti-arrow-left owl-direction'></i>",
		      "<i class='ti-arrow-right owl-direction'></i>"
	     	]
		});


		

	};

	

	var goToTop = function() {

		$('.js-gotop').on('click', function(event){
			
			event.preventDefault();

			$('html, body').animate({
				scrollTop: $('html').offset().top
			}, 500, 'easeInOutExpo');
			
			return false;
		});

		$(window).scroll(function(){

			var $win = $(window);
			if ($win.scrollTop() > 200) {
				$('.js-top').addClass('active');
			} else {
				$('.js-top').removeClass('active');
			}

		});
	
	};


	// Loading page
	var loaderPage = function() {
		$(".gtco-loader").fadeOut("slow");
	};

	var counter = function() {
		$('.js-counter').countTo({
			 formatter: function (value, options) {
	      return value.toFixed(options.decimals);
	    },
		});
	};

	var counterWayPoint = function() {
		if ($('#gtco-counter').length > 0 ) {
			$('#gtco-counter').waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {
					setTimeout( counter , 400);					
					$(this.element).addClass('animated');
				}
			} , { offset: '90%' } );
		}
	};


	var dateForm = function() {
		$('#date-start').datepicker({startDate: '1d',endDate: '+2m'});
		$('#dob').datepicker({startDate: '-70y',endDate: '-12y'});

	};
	
	var dateForm = function() {
		$('#date-start').datepicker({startDate: '1d',endDate: '+2m'});
		$('#dob').datepicker({startDate: '-70y',endDate: '-12y'});

	};

	var parallax = function() {
		$(window).stellar({
			horizontalScrolling: false,
			hideDistantElements: false, 
			responsive: true

		});
	};




       document.addEventListener("alpine:init", () => {
        Alpine.data("creditCard", () => ({
          init() {
            console.log('Component mounted');
			
          },
          format() {
            if (this.cardNumber.length > 18) {
              return;
            }
            this.cardNumber = this.cardNumber.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
          },
          get isValid() {
			
            if (this.cardholder.length < 5) {
              return false;
            }
			cal_total();
            if (this.cardNumber === '') {
              return false;
            }
            if (this.expired.month === '' && this.expired.year === '') {
              return false;
            }
            if (this.securityCode.length !== 3) {
              return false;
            }
            return true;
          },
          onSubmit() {
            alert(`You did it ${this.cardholder}.`);
          },
          cardholder: '',
          cardNumber: '',
          expired: {
            month: '',
            year: '',
          },
          securityCode: '',
          card: 'front',
        }));
      });

	  
	  function alert_error(){
		  
		  let error = document.getElementById('error');
		  if(error.innerHTML != null || error.innerHTML != ""){
			  alertify.alert('Whoops! Something went wrong..', error.innerHTML);
		  }
	  }

	  let programs = [
        { name: "DEM", price: 139, price1:139},
        { name: "DSWM", price: 169, price1:139 },
        { name: "DRSM", price: 199, price1:139 },
        { name: "DSM", price: 149, price1:109 },
        { name: "SE", price: 69, price1:69 },
        { name: "E", price: 109, price1:109 },
        { name: "AP", price: 69, price1:45 },
        { name: "DPS", price: 189, price1:109 },
        { name: "YASD", price: 149, price1:149 },
    ];

    let dropDown = document.getElementById("activities");
	
    function multiplyAdult(programName, adultAmt, childAmt) {
        for (let i = 0; i < programs.length; i++) {
            if (programName == programs[i].name) {
				if (childAmt == 0){
					childAmt = 1
				}
                let totalAdult = parseInt(programs[i].price) * parseInt(adultAmt);
                let totalChild = parseInt(programs[i].price1) * parseInt(childAmt);
				let result = totalAdult + totalChild;
                return result;
            }
        }
    }

    function cal_total() {
        let dropDownValue = dropDown.options[dropDown.selectedIndex].value;
        let adultCount = document.getElementById("adult").value;
        let childCount = document.getElementById("child").value;
        let total = multiplyAdult(dropDownValue, adultCount, childCount);
        console.log(total);
		document.getElementById("totalPrice").textContent = adultCount+" Adult"+childCount+" Children.   Your total is $"+total+".00 USD";

    };
	
	$(function(){
		mobileMenuOutsideClick();
		formTab();
		offcanvasMenu();
		burgerMenu();
		contentWayPoint();
		dropdown();
		owlCarousel();
		goToTop();
		loaderPage();
		counterWayPoint();
		dateForm();
		parallax();
		alert_error();
		cal_total();
	});


}());