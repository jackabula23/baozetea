@extends('layouts.index')

@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
			<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li class="active">產品</li>
		</ol>
	</div>
</div>
<!-- //breadcrumbs -->
<div class="products">
	<div class="container">
		<div class="agileinfo_single">
			
			<div class="col-md-4 agileinfo_single_left">
				<img id="example" src="{{asset('resources/assets/images/TaiwanMountainTea150gsingle.png')}}" alt=" " class="img-responsive">
			</div>
			<div class="col-md-8 agileinfo_single_right">
			<h2>高山茶150g</h2>
				{{-- <div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div> --}}
				<div class="w3agile_description">
					<h4>簡介:</h4>
					<p>採自台灣高山原始森林台地,終年雲霧繚繞,土壤有機質含量豐富,在氣候.土壤等天然環境均佳的條件下,所產製成的茶葉,茶湯清澈透明,質味甘美,喉韻絕佳,堪稱「茶中極品」。</p>
				</div>
				<div class="snipcart-item block">
					<div class="snipcart-thumb agileinfo_single_right_snipcart">
						<h4 class="m-sing">$250 <span>$300</span></h4>
					</div>
					<div class="snipcart-details agileinfo_single_right_details">
						<form action="#" method="post">
							<fieldset>
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="business" value=" ">
								<input type="hidden" name="item_name" value="pulao basmati rice">
								<input type="hidden" name="amount" value="21.00">
								<input type="hidden" name="discount_amount" value="1.00">
								<input type="hidden" name="currency_code" value="USD">
								<input type="hidden" name="return" value=" ">
								<input type="hidden" name="cancel_return" value=" ">
								<input type="submit" name="submit" value="Add to cart" class="button">
							</fieldset>
						</form>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- new -->
<div class="newproducts-w3agile">
	<div class="container">
		<h3>產品推薦</h3>
			<div class="agile_top_brands_grids">
				<div class="col-md-3 top_brand_left-1">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="{{asset('resources/assets/images/offer.png')}}" alt=" " class="img-responsive">
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="products.html"><img title=" " alt=" " src="{{asset('resources/assets/images/【寶澤茶品】台灣茗藏-阿里山禮盒300g.png')}}"></a>		
											<p>台灣茗藏-阿里山禮盒300g</p>
											{{-- <div class="stars">
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star gray-star" aria-hidden="true"></i>
											</div> --}}
												<h4>$350 <span>$550</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="business" value=" ">
													<input type="hidden" name="item_name" value="Fortune Sunflower Oil">
													<input type="hidden" name="amount" value="35.99">
													<input type="hidden" name="discount_amount" value="1.00">
													<input type="hidden" name="currency_code" value="USD">
													<input type="hidden" name="return" value=" ">
													<input type="hidden" name="cancel_return" value=" ">
													<input type="submit" name="submit" value="Add to cart" class="button">
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top_brand_left-1">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="{{asset('resources/assets/images/offer.png')}}" alt=" " class="img-responsive">
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="products.html"><img title=" " alt=" " src="{{asset('resources/assets/images/臺灣印記-阿里山禮盒.png')}}"></a>		
											<p>臺灣印記-阿里山禮盒</p>
											{{-- <div class="stars">
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star gray-star" aria-hidden="true"></i>
											</div> --}}
											<h4>$390 <span>$450</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart">
														<input type="hidden" name="add" value="1">
														<input type="hidden" name="business" value=" ">
														<input type="hidden" name="item_name" value="basmati rise">
														<input type="hidden" name="amount" value="30.99">
														<input type="hidden" name="discount_amount" value="1.00">
														<input type="hidden" name="currency_code" value="USD">
														<input type="hidden" name="return" value=" ">
														<input type="hidden" name="cancel_return" value=" ">
														<input type="submit" name="submit" value="Add to cart" class="button">
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top_brand_left-1">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="{{asset('resources/assets/images/offer.png')}}" alt=" " class="img-responsive">
							</div>
							<div class="agile_top_brand_left_grid_pos">
								<img src="{{asset('resources/assets/images/offer.png')}}" alt=" " class="img-responsive">
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="products.html"><img src="{{asset('resources/assets/images/寶澤經典茶葉禮盒.png')}}" alt=" " class="img-responsive"></a>
											<p>寶澤經典茶葉禮盒</p>
											{{-- <div class="stars">
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star gray-star" aria-hidden="true"></i>
											</div> --}}
											<h4>$890 <span>$1050</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="business" value=" ">
													<input type="hidden" name="item_name" value="Pepsi soft drink">
													<input type="hidden" name="amount" value="80.00">
													<input type="hidden" name="discount_amount" value="1.00">
													<input type="hidden" name="currency_code" value="USD">
													<input type="hidden" name="return" value=" ">
													<input type="hidden" name="cancel_return" value=" ">
													<input type="submit" name="submit" value="Add to cart" class="button">
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top_brand_left-1">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="{{asset('resources/assets/images/offer.png')}}" alt=" " class="img-responsive">
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="products.html"><img title=" " alt=" " src="{{asset('resources/assets/images/典藏-台灣之美高山茶禮盒.png')}}"></a>		
											<p>典藏-台灣之美高山茶禮盒</p>
											{{-- <div class="stars">
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star blue-star" aria-hidden="true"></i>
												<i class="fa fa-star gray-star" aria-hidden="true"></i>
											</div> --}}
											<h4>$350 <span>$550</span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart">
													<input type="hidden" name="add" value="1">
													<input type="hidden" name="business" value=" ">
													<input type="hidden" name="item_name" value="Fortune Sunflower Oil">
													<input type="hidden" name="amount" value="35.99">
													<input type="hidden" name="discount_amount" value="1.00">
													<input type="hidden" name="currency_code" value="USD">
													<input type="hidden" name="return" value=" ">
													<input type="hidden" name="cancel_return" value=" ">
													<input type="submit" name="submit" value="Add to cart" class="button">
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>
					<div class="clearfix"> </div>
			</div>
	</div>
</div>
<!-- //new -->
@endsection