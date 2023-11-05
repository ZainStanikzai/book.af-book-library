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
				Home Slider Start
		*************************************-->
		@include('livewire.layout-parsial-component.slider')
		<!--************************************
				Home Slider End
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


    @livewireScripts()
	<script src="{{ asset('assets/js/vendor/jquery-library.js') }}"></script>
	<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src=" {{ asset('assets/js/jquery.vide.min.js') }} "></script>
	<script src="{{ asset('assets/js/countdown.js') }} "></script>
	<script src="{{ asset('assets/js/jquery-ui.js') }} "></script>
	<script src="{{ asset('assets/js/parallax.js') }} "></script>
	<script src="{{ asset('assets/js/countTo.js') }} "></script>
	<script src="{{ asset('assets/js/appear.js') }} "></script>
	<script src="{{ asset('assets/js/gmap3.js') }} "></script>
	<script src="{{ asset('assets/js/main.js') }} "></script>
</body>

<!-- Mirrored from exprostudio.com/html/book_library/indexv2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Aug 2023 12:37:22 GMT -->
</html>