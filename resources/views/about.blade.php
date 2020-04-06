@extends('layouts.index')

@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
			<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li class="active">關於寶澤</li>
		</ol>
	</div>
</div>
<!-- //breadcrumbs -->
<!-- about -->
<div class="about">
	<div class="container">
		<h3 class="w3_agile_header">關於寶澤</h3>
		<div class="about-agileinfo w3layouts">
			<div class="col-md-12 about-wthree-grids grid-top">
				<h4>keep the origin,choose the finest</h4>
				<p class="top">1962年來自南投的一位老茶農，初中畢業就開始負擔家計，從種稻米、鳳梨、山藥到茶葉付出50年的歲月，為了發揚台灣茶成為精緻農業而默默付出，隨著時代進步，當大多數茶農選擇機械採收來提高產量及收入時，老茶農堅持惟有用手工採收來生產，品質才會好，也就是因為多了一份執著，讓他的茶喝起來特別的甘甜，2007年他建立茶苗圃，將自己親手培育之茶苗銷售給各地茶農，讓這些優良品種得以生生不息，2012年成立寶澤國際欲將50年來製茶經驗傳承下去。</p>
				<div class="about-w3agilerow">
					<div class="col-md-4 about-w3imgs">
						<img src="{{asset('resources/assets/images/p3.jpg')}}" alt="" class="img-responsive zoom-img"/>
					</div>
					<div class="col-md-4 about-w3imgs">
						<img src="{{asset('resources/assets/images/p4.jpg')}}" alt=""  class="img-responsive zoom-img"/>
					</div>
					<div class="col-md-4 about-w3imgs">
						<img src="{{asset('resources/assets/images/p3.jpg')}}" alt=""  class="img-responsive zoom-img"/>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->
<!-- about-slid -->
<div class="about-slid agileits-w3layouts"> 
	<div class="container">
		<div class="about-slid-info"> 
			<h2>Lorem Ipsum is that it has a moreless normal</h2>
			<p>Lorem Ipsum generators on the Internet tend to repeat predefined chunks on the Internet tend as necessary, making this the first true generator on the Internet embarrassing hidden in the middle of text Lorem Ipsum generators on the Internet tend to repeat predefinedchunks as necessary, making this the first true generator on the.</p>
		</div>
	</div>
</div>
<!-- //about-slid -->
@endsection