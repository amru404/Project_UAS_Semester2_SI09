<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>`
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="/assetuser/img/icon_aceh.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Aceh Pedia</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{ asset('assetuser/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('assetuser/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assetuser/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('assetuser/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assetuser/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('assetuser/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('assetuser/css/nouislider.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assetuser/css/ion.rangeSlider.css') }}" />
	<link rel="stylesheet" href="{{ asset('assetuser/css/ion.rangeSlider.skinFlat.css') }}" />
	<link rel="stylesheet" href="{{ asset('assetuser/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('assetuser/css/main.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>

<body>

	<!-- Start Header Area -->
	<!-- End Header Area -->
	@extends('template/navbar')
	<!-- start banner Area -->
	@yield ('content')


	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p class="text-secondary">
						kami bangga menjadi tujuan utama Anda untuk menemukan produk fashion berkualitas tinggi dengan sentuhan khas Aceh. Dengan menyediakan pilihan yang beragam dari pakaian, aksesori, dan barang-barang fashion lainnya, kami berkomitmen untuk memenuhi gaya dan preferensi Anda.
						</p>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p class="text-secondary">Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0 text-secondary">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" class="text-decoration-none" target="_blank">AcehPedia</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>zend_logo_guid
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="{{ asset('assetuser/js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{ asset('assetuser/js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assetuser/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('assetuser/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('assetuser/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assetuser/js/nouislider.min.js') }}"></script>
	<script src="{{ asset('assetuser/js/countdown.js') }}"></script>
	<script src="{{ asset('assetuser/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assetuser/js/owl.carousel.min.js') }}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ asset('assetuser/js/gmaps.min.js') }}"></script>
	<script src="{{ asset('assetuser/js/main.js') }}"></script>
</body>

</html>