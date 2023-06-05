<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{asset('assets/awal/img/jambuwer.png')}}">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Desa Junrejo</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="{{asset('assets/awal/css/linearicons.css')}}">
		<link rel="stylesheet" href="{{asset('assets/awal/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('assets/awal/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/awal/css/animate.css')}}">
		<link rel="stylesheet" href="{{asset('assets/awal/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('assets/awal/css/main.css')}}">
	</head>
	<body>
		<div id="top"></div>
		<!-- Start Header Area -->
		<header class="default-header">
			<div class="sticky-header">
				<div class="container">
					<div class="header-content d-flex justify-content-between align-items-center">
						<div class="logo">
							<a href="#top" class="smooth">
								<img src="{{asset('assets/awal/img/jambuwer.jpeg')}}" alt="">
							</a>
						</div>
						<div class="right-bar d-flex align-items-center">
							<nav class="d-flex align-items-center">
								<ul class="main-menu">
									<div class="flex-center position-ref full-height">
					            @if (Route::has('login'))
					                <div class="top-right links">
					                    @auth
					                        <a href="{{ url('/home') }}">Home</a>
					                    @else
					                        <a href="{{ route('login') }}">Login</a>
					                        <!-- <a href="{{ route('register') }}">Register</a> -->
					                    @endauth
					                </div>
					            @endif
								</ul>
								<a href="#" class="mobile-btn"><span class="lnr lnr-menu"></span></a>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header Area -->
		<!-- Start Banner Area -->
		<section class="banner-area relative">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row fullscreen justify-content-center align-items-center">
					<div class="col-lg-8">
						<div class="banner-content text-center">
							<h1 class="text-uppercase text-white">Pemerintahan Kabupaten Malang</h1>
							<h1 class="text-uppercase text-white">Kecamatan Junrejo</h1>
							<h1 class="text-uppercase text-white">Desa Junrejo</h1>
							<!-- <a href="#" class="primary-btn banner-btn">Register</a> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Banner Area -->
		<footer>
					<p class="footer-text m-0">Copyright &copy; 2018  |  All rights reserved to Desa Junrejo Kec.Junrejo Kab.Malang</p>
		</footer>

		<script src="{{asset('assets/awal/js/vendor/jquery-2.2.4.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="{{asset('assets/awal/js/vendor/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/awal/js/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{asset('assets/awal/js/jquery.sticky.js')}}"></script>
		<script src="{{asset('assets/awal/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('assets/awal/js/mixitup.min.js')}}"></script>
		<script src="{{asset('assets/awal/js/main.js')}}"></script>
	</body>
</html>
