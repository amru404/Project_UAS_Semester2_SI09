<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="/pembeli"><img src="/assetuser/img/CEH.png" alt="" style="height: 55px;"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item {{ (request()->is('pembeli')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
							<li class="nav-item {{ (request()->is('kategori')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('kategori') }}">Category</a></li>
							<li class="nav-item {{ (request()->is('kontak')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('kontak') }}">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="{{ route('cart') }}" class="cart"><span class="bi bi-cart3"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
							<li class="nav-item submenu dropdown"><a href="{{ route('user.profile') }}" class="profile"><span class="bi bi-person-circle"></span></a>
                                <ul class="dropdown">
                                    <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
								    <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>    
                                </ul>
                            </li> -->
                        <!-- <li class="nav-item submenu dropdown">
                            <a
                                href="{{ route('user.profile') }}"
                                class="profile"
                            >
                                <span class="bi bi-person-circle"></span>
                            </a>
                            @guest
                            <ul class="dropdown" style="left: -122px">
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        href="{{ route('login') }}"
                                        >Login</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="single-blog.html"
                                        >Profile</a
                                    >
                                </li>
                            </ul>
                            @endguest
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input
                    type="text"
                    class="form-control"
                    id="search_input"
                    placeholder="Search Here"
                />
                <button type="submit" class="btn"></button>
                <span
                    class="lnr lnr-cross"
                    id="close_search"
                    title="Close Search"
                ></span>
            </form>
        </div>
    </div>
</header>
