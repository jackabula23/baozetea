<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>寶澤茶品</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="寶澤茶品" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('resources/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('resources/assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="{{asset('resources/assets/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link rel="icon" href="{{asset('resources/assets/images/logoB.png')}}">
<!-- js -->
<script src="{{asset('resources/assets/js/jquery-1.11.1.min.js')}}"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('resources/assets/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/assets/js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			{{-- <div class="w3l_offers">
				<p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="products.html">SHOP NOW</a></p>
			</div> --}}
			{{-- <div class="product_list_header">  
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="display" value="1">
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>  
			</div> --}}
			<div class="agile-login">
				<ul>
				<!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">登入</a></li>
                        <li><a href="{{ route('register') }}">註冊</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                HI&nbsp;{{ Auth::user()->name }}
                            </a>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    登出
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </li>
					@endguest
					<li><a href="{{url('/index')}}">前往商店</a></li>
					<li><a href="{{url('/cart')}}">購物車
							<span class="p-2 bg-blue-700 text-white rounded">
								@if(session()->has('cart'))
								{{session()->get('cart')->totalQty}}
								@else
								0
								@endif
							</span>
						</a>
					</li>
					<li><a href="{{url('/orders')}}">訂單</a></li>		
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<a href="{{url('index')}}"><img src="{{asset('resources/assets/images/baoze.png')}}" alt=""></a>
			</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="{{url('index')}}" class="act">首頁</a></li>	
									<!-- Mega Menu -->
									{{-- <li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Groceries<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Groceries</h6>
														<li><a href="#">Dals & Pulses</a></li>
														<li><a href="#">Almonds</a></li>
														<li><a href="#">Cashews</a></li>
														<li><a href="#">Dry Fruit</a></li>
														<li><a href="#"> Mukhwas </a></li>
														<li><a href="#">Rice & Rice Products</a></li>
													</ul>
												</div>													
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Household<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Household</h6>
														<li><a href="#">Cookware</a></li>
														<li><a href="#">Dust Pans</a></li>
														<li><a href="#">Scrubbers</a></li>
														<li><a href="#">Dust Cloth</a></li>
														<li><a href="#"> Mops </a></li>
														<li><a href="#">Kitchenware</a></li>
													</ul>
												</div>																								
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Personal Care<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Baby Care</h6>
														<li><a href="#">Baby Soap</a></li>
														<li><a href="#">Baby Care Accessories</a></li>
														<li><a href="#">Baby Oil & Shampoos</a></li>
														<li><a href="#">Baby Creams & Lotion</a></li>
														<li><a href="#"> Baby Powder</a></li>
														<li><a href="#">Diapers & Wipes</a></li>
													</ul>
												</div>												
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Packaged Foods<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Accessories</h6>
														<li><a href="#">Baby Food</a></li>
														<li><a href="#">Dessert Items</a></li>
														<li><a href="#">Biscuits</a></li>
														<li><a href="#">Breakfast Cereals</a></li>
														<li><a href="#"> Canned Food </a></li>
														<li><a href="#">Chocolates & Sweets</a></li>
													</ul>
												</div>											
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Tea & Coeffe</h6>
														<li><a href="#">Green Tea</a></li>
														<li><a href="#">Ground Coffee</a></li>
														<li><a href="#">Herbal Tea</a></li>
														<li><a href="#">Instant Coffee</a></li>
														<li><a href="#"> Tea </a></li>
														<li><a href="#">Tea Bags</a></li>
													</ul>
												</div>
							
											</div>
										</ul>
									</li> --}}
									<li><a href="{{url('products')}}">所有產品</a></li>
									<li><a href="{{url('contact')}}">聯絡我們</a></li>
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
@yield('content')
<!-- //footer -->
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>與我們聯繫</h3>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>新北市板橋區民生路一段25號2樓</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:bolin6377@gmail.com">bolin6377@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-phone-alt" aria-hidden="true"></i>電話 : 02-29509070</li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>手機 : 0933711233</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>有關網站資訊</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="{{url('about')}}">About Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="{{url('contact')}}">Contact Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="{{url('faq')}}">FAQ's</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>產品分類</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Groceries</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Household</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Personal Care</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Packaged Foods</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="#">Beverages</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>個人資訊</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="{{url('products')}}">逛逛去</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="{{url('checkout')}}">結帳去</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="{{route('login')}}">登入</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="{{route('register')}}">註冊</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="footer-copy">
			
			<div class="container">
				<p>© 2017 寶澤茶品. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
		
	</div>	
	<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="payment-w3ls">	
					<img src="{{asset('resources/assets/images/card.png')}}" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('resources/assets/js/bootstrap.min.js')}}"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="{{asset('resources/assets/js/minicart.min.js')}}"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="{{asset('resources/assets/js/skdslider.min.js')}}"></script>
<link href="{{asset('resources/assets/css/skdslider.css')}}" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
</body>
</html>