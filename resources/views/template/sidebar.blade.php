<div class="col-xl-3 col-lg-4 col-md-5">
			<div class="sidebar-categories">
				<div class="head">Browse Categories</div>
				@foreach ($kategoris as $kategori)
				<ul class="main-categories">
					<li class="main-nav-list">
						<a data-toggle="collapse" href="#" aria-expanded="false" aria-controls="fruitsVegetable" class="text-decoration-none">
							<span class="lnr lnr-arrow-right"></span>{{ $kategori->name }}
						</a>
					</li>
				</ul>
				@endforeach
			</div>
		</div>