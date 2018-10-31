
<header id="header" class="header-page">
	<!-- <div class="container"> -->
	<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row top-header vc_custom_1516164851430 vc_row-has-fill" style="background-color: #727272">
		<div class="container">
			<div class="wpb_column column_container col-sm-6 col-md-3 col-xs-6">
				<div class="vc_column-inner ">
					<div class="wpb_wrapper">
						<div class="custom-information  ">
							<p class="desc white font-bold text-uppercase title12 top-phone-number text-left">Call us Now: 0971006294</p>
						</div>
					</div>
				</div>
			</div>
			<div class="info-top-right text-right wpb_column column_container col-sm-6 col-md-9 col-xs-6">
				<div class="vc_column-inner ">
					<div class="wpb_wrapper">
						<ul class="social-network list-inline-block text-uppercase  inline-block font-bold">
							<li><a class="white push" href="#"><i class="icon ion-social-facebook"></i></a></li>
							<li><a class="white push" href="#"><i class="icon ion-social-googleplus"></i></a></li>
							<li><a class="white push" href="#"><i class="icon ion-social-twitter"></i></a></li>
						</ul>
						<ul class="top-link list-inline-block text-uppercase  inline-block text-upercase title12">
							
							<li><a class="white wobble-top" href="http://localhost/wordpress/dogstore/about/">About Us</a></li>
							<li><a class="white wobble-top" href="http://localhost/wordpress/dogstore/contact/">Contact us</a></li>
							
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		
	</div>
	<div class="vc_row-full-width vc_clearfix"></div>
	<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row main-header bg-color main-header2">
		<div class="container">
			<div class="wpb_column column_container col-sm-12 col-md-3">
				<div class="vc_column-inner ">
					<div class="wpb_wrapper">
						<div class="logo logo-text">
							<div class="text-logo">
								<a href="">
									<ul class="list-inline-block">
										<li><img class="alignnone size-full wp-image-870" src="{{ asset('asset/uploads/2018/01/logo-2.png') }}" alt="" width="51" height="46" /></li>
										<li>
											<h1 class="title30 dosis-font text-uppercase font-bold white">Haustiere</h1>
											<h2 class="title24 gab-font white opaci">we sell real friends</h2>
										</li>
									</ul>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="wrap-menu-search wpb_column column_container col-sm-12 col-md-9">
				<div class="vc_column-inner ">
					<div class="wpb_wrapper">
						<nav class="main-nav  main-nav1 ">
							<ul id="menu-main-menu" class="list-none">
								<li id="nav-menu-item-826" class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children"><a href="{{ route('home.index') }}" class="menu-link main-menu-link">Home</a></li>
								<li id="nav-menu-item-831" class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="" class="menu-link main-menu-link">Dogs</a>
								<ul class="sub-menu menu-odd  menu-depth-1">
									@foreach($dogCategories as $cate)
										<li id="nav-menu-item-1083" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ route('home.dog',$cate->id) }}" class="menu-link sub-menu-link">{{ $cate->name }}</a>
										</li>
									@endforeach
								</ul>
							</li>
							<li id="nav-menu-item-829" class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="../shop/index.html" class="menu-link main-menu-link">Products</a>
							<ul class="sub-menu menu-odd  menu-depth-1">
								@foreach($productCategories as $cate)
								<li id="nav-menu-item-1179" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page">
									<a href="{{ route('home.product',$cate->id) }}" class="menu-link sub-menu-link">{{ $cate->name }}</a>
								</li>
								@endforeach
							</li>
						</ul>
					</li>
					<li id="nav-menu-item-827" class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children"><a href="{{ route('home.blog') }}" class="menu-link main-menu-link">Blog</a>
					<!-- <ul class="sub-menu menu-odd  menu-depth-1">
						<li id="nav-menu-item-1122" class="sub-menu-item  menu-item-odd menu-item-depth-1 menu-item menu-item-type-post_type menu-item-object-page"><a href="../blog-list/index.html" class="menu-link sub-menu-link">Blog List</a></li>
					</ul> -->
				</li>
				<li id="nav-menu-item-837" class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page"><a href="../about/index.html" class="menu-link main-menu-link">About</a></li>
				<li id="nav-menu-item-836" class="main-menu-item  menu-item-even menu-item-depth-0 menu-item menu-item-type-post_type menu-item-object-page"><a href="../contact/index.html" class="menu-link main-menu-link">Contact</a></li>
			</ul>
			<a href="#" class="toggle-mobile-menu"><span></span></a>
		</nav>
		<div class="link-profile  ">
			<a class="color grow" href="http://7uptheme.com/wordpress/dogstore/my-account/"><i class="icon ion-person"></i></a>
		</div>
		<div class="block-element block-search-element  ">
			<form class="search-form search-hover   live-search-on" action="http://7uptheme.com/wordpress/haustiere/">
				<input name="s" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Search......" type="text">
				<input type="hidden" name="post_type" value="product" />
				<div class="submit-form">
					<input type="submit" value="">
				</div>
				<div class="list-product-search">
					<p class="text-center">Please enter key search to display results.</p>
				</div>
			</form>
		</div>
		<div class="mini-cart-box mini-cart1 aside-box ">
			<a class="mini-cart-link bg-color" href="../cart/index.html">
				<span class="mini-cart-icon title30 white"><i class="icon ion-android-cart"></i></span>
				<span class="mini-cart-text">
					<strong class="mini-cart-title white">Shopping Cart</strong>
					<span class="mini-cart-number white set-cart-number">0 </span>
					<span class="white mini-cart-space">items - </span>
					<span class="mini-cart-total-price set-cart-price white">
						<span class="woocommerce-Price-amount amount">
							<span class="woocommerce-Price-currencySymbol">&#36;</span>0.00</span>
						</span>
					</span>
				</a>
				
				<div class="mini-cart-content dropdown-list text-left">
					<h2 class="title18 font-bold"><span class="set-cart-number">0</span> items</h2>
					<div class="mini-cart-main-content">
						<div class="mini-cart-empty">No products in the cart.</div>
					</div>
					<div class="total-default hidden">
						<span class="woocommerce-Price-amount amount">
							<span class="woocommerce-Price-currencySymbol">&#36;</span>0.00</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="vc_row-full-width vc_clearfix"></div>
<!-- </div> -->
</header>