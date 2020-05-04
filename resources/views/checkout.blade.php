@extends('layouts.index')

@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1">
			<li><a href="{{url('index')}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li class="active">結帳</li>
		</ol>
	</div>
</div>
<!-- //breadcrumbs -->
<!-- checkout -->
<div class="checkout">
	<div class="container">
		<h2>您的購物車總共有<span>三件商品</span></h2>
		<div class="checkout-right">
			<table class="timetable_sub">
				<thead>
					<tr>
						<th>SL No.</th>	
						<th>Product</th>
						<th>Quality</th>
						<th>Product Name</th>					
						<th>Price</th>
						<th>Remove</th>
					</tr>
				</thead>
				<tr class="rem1">
					<td class="invert">1</td>
					<td class="invert-image"><a href="{{url('single')}}"><img src="{{asset('resources/assets/images/TaiwanMountainTea150g.png')}}" alt=" " class="img-responsive" /></a></td>
					<td class="invert">
						 <div class="quantity"> 
							<div class="quantity-select">                           
								<div class="entry value-minus">&nbsp;</div>
								<div class="entry value"><span>1</span></div>
								<div class="entry value-plus active">&nbsp;</div>
							</div>
						</div>
					</td>
					<td class="invert">高山茶150g</td>
					
					<td class="invert">$290.00</td>
					<td class="invert">
						<div class="rem">
							<div class="close1"> </div>
						</div>
						<script>$(document).ready(function(c) {
							$('.close1').on('click', function(c){
								$('.rem1').fadeOut('slow', function(c){
									$('.rem1').remove();
								});
								});	  
							});
					   </script>
					</td>
				</tr>
				<tr class="rem2">
					<td class="invert">2</td>
					<td class="invert-image"><a href="{{url('single')}}"><img src="{{asset('resources/assets/images/FrozenTopOolongTea150g.png')}}" alt=" " class="img-responsive" /></a></td>
					<td class="invert">
						 <div class="quantity"> 
							<div class="quantity-select">                           
								<div class="entry value-minus">&nbsp;</div>
								<div class="entry value"><span>1</span></div>
								<div class="entry value-plus active">&nbsp;</div>
							</div>
						</div>
					</td>
					<td class="invert">凍頂烏龍茶150g</td>
				
					<td class="invert">$250.00</td>
					<td class="invert">
						<div class="rem">
							<div class="close2"> </div>
						</div>
						<script>$(document).ready(function(c) {
							$('.close2').on('click', function(c){
								$('.rem2').fadeOut('slow', function(c){
									$('.rem2').remove();
								});
								});	  
							});
					   </script>
					</td>
				</tr>
				<tr class="rem3">
					<td class="invert">3</td>
					<td class="invert-image"><a href="{{url('single')}}"><img src="{{asset('resources/assets/images/LishanAlpineOolong150g.png')}}" alt=" " class="img-responsive" /></a></td>
					<td class="invert">
						 <div class="quantity"> 
							<div class="quantity-select">                           
								<div class="entry value-minus">&nbsp;</div>
								<div class="entry value"><span>1</span></div>
								<div class="entry value-plus active">&nbsp;</div>
							</div>
						</div>
					</td>
					<td class="invert">梨山高山烏龍150g</td>
					
					<td class="invert">$150.00</td>
					<td class="invert">
						<div class="rem">
							<div class="close3"> </div>
						</div>
						<script>$(document).ready(function(c) {
							$('.close3').on('click', function(c){
								$('.rem3').fadeOut('slow', function(c){
									$('.rem3').remove();
								});
								});	  
							});
					   </script>
					</td>
				</tr>
					<!--quantity-->
						<script>
						$('.value-plus').on('click', function(){
							var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
							divUpd.text(newVal);
						});
						$('.value-minus').on('click', function(){
							var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
							if(newVal>=1) divUpd.text(newVal);
						});
						</script>
					<!--quantity-->
			</table>
		</div>
		<div class="checkout-left">	
			<div class="checkout-left-basket">
				<h4>Continue to basket</h4>
				<ul>
					<li>高山茶150g <i>-</i> <span>$290.00</span></li>
					<li>凍頂烏龍茶150g <i>-</i> <span>$250.00</span></li>
					<li>梨山高山烏龍150g <i>-</i> <span>$150.00</span></li>
					<li>Total Service Charges <i>-</i> <span>$15.00</span></li>
					<li>總計 <i>-</i> <span>$84.00</span></li>
				</ul>
			</div>
			<div class="checkout-right-basket">
				<a href="single.html"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>繼續購物</a>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //checkout -->
@endsection