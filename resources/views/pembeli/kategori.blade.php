@extends('template/app')

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Shop Category page</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html">Fashion Category</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->
<div class="container">
	<div class="row">
		@include ('template/sidebar')
		<div class="col-xl-9 col-lg-8 col-md-7">
			<!-- Start Filter Bar -->
			@include ('template/sorting')
			<!-- End Filter Bar -->
			<!-- Start Best Seller -->
			@yield('satu')
			<div class="single-product-slider">
			<div class="container">
				<div class="row mt-5">
					<!-- single product -->
					
					@foreach ($products as $product)
					<div class="col-lg-3 col-md-6">
						<a href="{{route('detail',$product->id)}}" class="text-dark text-decoration-none">
							<div class="card single-product p-1">
							<img class="img-fluid" src="{{ asset('img_produk/'.$product->gambar) }}" style="height: 250px;" alt="">
							<div class="product-details ml-1">
								<h6>{{ $product->nama }}</h6>
								<div class="price">
									<h6>{{ number_format($product->harga) }}</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
								</div>
							</div>
							</div>
						</a>
					</div>
					@endforeach
					</a>
				</div>
			</div>
		</div>
			<!-- End Best Seller -->

		</div>
	</div>
</div>
