<!doctype html>
<html class="no-js" > 
<!-- Mirrored from exprostudio.com/html/book_library/indexv2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Aug 2023 12:37:20 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BootStrap HTML5 CSS3 Theme</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
    @livewireStyles()
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href=" {{ asset('assets/css/normalize.css') }} ">
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}} ">
	<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/transitions.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/color-purple.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
	
	

</head>
<body class="tg-home tg-homevtwo">
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		@include('livewire.layout-parsial-component.header')
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			{{$slot}}
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
			@include('livewire.layout-parsial-component.footer')
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->


    
	<script src="{{ asset('assets/js/vendor/jquery-library.js') }}" ></script>
	<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src=" {{ asset('assets/js/jquery.vide.min.js') }} "></script>
	<script src="{{ asset('assets/js/countdown.js') }} "></script>
	<script src="{{ asset('assets/js/jquery-ui.js') }} "></script>
	<script src="{{ asset('assets/js/countTo.js') }} "></script>
	<script src="{{ asset('assets/js/appear.js') }} "></script>
	<script src="{{ asset('assets/js/main.js') }}  "> data-navigate-track</script>

	<script>
	
	/*--------------------------------------
			HOME SLIDER						
	--------------------------------------*/
	var _tg_homeslider = jQuery('#tg-homeslider');
	_tg_homeslider.owlCarousel({
		items: 1,
		nav: true,
		loop: true,
		dots: true,
		autoplay:false,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
	});
	/*--------------------------------------
			BEST BOOK SLIDER				
	--------------------------------------*/
	var _tg_bestsellingbooksslider = jQuery('#tg-bestsellingbooksslider');
	_tg_bestsellingbooksslider.owlCarousel({
		nav: true,
		loop: true,
		margin: 30,
		dots: true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
		responsive: {
			0: { items:1 },
			480: { items:2 },
			600: { items:3 },
			1000: { items:5 },
			1200: { items:6 },
		}
	});
	/*--------------------------------------
			RELATED PRODUCT SLIDER			
	--------------------------------------*/
	var _tg_relatedproductslider = jQuery('#tg-relatedproductslider');
	_tg_relatedproductslider.owlCarousel({
		nav: true,
		loop: true,
		margin: 30,
		dots: true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
		responsive: {
			0: { items:1 },
			568: { items:2 },
			768: { items:2 },
			992: { items:3 },
			1200: { items:4 },
		}
	});
	/* -------------------------------------
			COLLECTION COUNTER
	-------------------------------------- */
	try {
		var _tg_collectioncounters = jQuery('#tg-collectioncounters');
		_tg_collectioncounters.appear(function () {
			
			var _tg_collectioncounter = jQuery('.tg-collectioncounter h3');
			_tg_collectioncounter.countTo({
				formatter: function (value, options) {
					return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
				}
			});
		});
	} catch (err) {}
	/*--------------------------------------
			PICKED BY AUTHOR SLIDER			
	--------------------------------------*/
	var _tg_pickedbyauthorslider = jQuery('#tg-pickedbyauthorslider');
	_tg_pickedbyauthorslider.owlCarousel({
		nav: true,
		loop: true,
		dots: true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
		responsive: {
			0: { items:1 },
			768: { items:2 },
			992: { items:3 },
		}
	});
	/*--------------------------------------
			TESTIMONIALS SLIDER				
	--------------------------------------*/
	var _tg_testimonialsslider = jQuery('#tg-testimonialsslider');
	_tg_testimonialsslider.owlCarousel({
		items:1,
		nav: true,
		loop: true,
		dots: true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
	});
	/*--------------------------------------
			PICKED BY AUTHOR SLIDER			
	--------------------------------------*/
	var _tg_authorsslider = jQuery('#tg-authorsslider');
	_tg_authorsslider.owlCarousel({
		nav: true,
		loop: true,
		dots: true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
		responsive: {
			0: { items:1 },
			600: { items:4 },
			1000: { items:5 },
			1200: { items:6 },
		}
	});
	/*--------------------------------------
			TEAMS SLIDER					
	--------------------------------------*/
	var _tg_teamsslider = jQuery('#tg-teamsslider');
	_tg_teamsslider.owlCarousel({
		nav: true,
		loop: true,
		dots: true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
		responsive: {
			0: { items:1 },
			600: { items:3 },
			1000: { items:4 },
		}
	});
	/*--------------------------------------
			NEWS AND ARTICLE SLIDER			
	--------------------------------------*/
	var _tg_postslider = jQuery('#tg-postslider');
	_tg_postslider.owlCarousel({
		nav: true,
		loop: true,
		dots: true,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
		responsive: {
			0: { items:1 },
			600: { items:2 },
			992: { items:3 },
			1200: { items:4 },
		}
	});
	/*--------------------------------------
			HOME SLIDER						
	--------------------------------------*/
	var _tg_successslider = jQuery('#tg-successslider');
	_tg_successslider.owlCarousel({
		items: 1,
		nav: true,
		loop: true,
		dots: true,
		autoplay:false,
		navText: [
					'<i class="icon-chevron-left"></i>',
					'<i class="icon-chevron-right"></i>'
				],
		navClass: [
					'owl-prev tg-btnround tg-btnprev',
					'owl-next tg-btnround tg-btnnext'
				],
	});
	//-----------parallax

	
	</script>
	@livewireScripts()
	
</body>

<!-- Mirrored from exprostudio.com/html/book_library/indexv2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Aug 2023 12:37:22 GMT -->
</html>