@extends('layouts.index')

@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
			<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li class="active">FAQ</li>
		</ol>
	</div>
</div>
<!-- //breadcrumbs -->
<!-- help-page -->
<div class="faq-w3agile">
	<div class="container"> 
		<h2 class="w3_agile_header">常見問題(FAQ)</h2> 
		<ul class="faq">
			<li class="item1"><a href="#" title="click here">如何成為本網站會員?</a>
				<ul>
					<li class="subitem1"><p>您點選右上角註冊會員，根據網站導引進行註冊。</p></li>										
				</ul>
			</li>
			<li class="item2"><a href="#" title="click here">一定要註冊成為會員才能購買嗎？</a>
				<ul>
					<li class="subitem1"><p>是的，註冊成為會員後才能訂購本網站商品。</p></li>										
				</ul>
			</li>
			<li class="item3"><a href="#" title="click here">如何修改會員資料?</a>
				<ul>
					<li class="subitem1"><p>請您至會員中心修改，帳號無法修改。</p></li>										
				</ul>
			</li>
			<li class="item4"><a href="#" title="click here">如何查詢訂單？</a>
				<ul>
					<li class="subitem1"><p>您可至會員中心查詢訂單內容。</p></li>										
				</ul>
			</li> 
			<li class="item5"><a href="#" title="click here">如何取消訂單？</a>
				<ul>
					<li class="subitem1"><p>訂單送出後無法取消。如有訂單問題，請聯網站管理員。</p></li>										
				</ul>
			</li>
			<li class="item6"><a href="#" title="click here">請問商品訂錯或不滿意可以退換貨嗎？</a>
				<ul>
					<li class="subitem1"><p>若需退貨或取消訂單，請務必聯繫客服人員，將有專人為您服務。<br>
						七天鑑賞期說明：<br>						
						依消保法第19條，消費者於網站上所購買之商品，可享有到貨七天的猶豫期(七日鑑賞期)。鑑賞期並非試用期，用品類購物皆享7天(含假日)鑑賞期，退回之商品必須是回復原狀且包裝完整，退貨之運費由店家負責。若退換貨產品非瑕疵品，而是因為個人因素申請退換貨，退貨運費請消費者自行負責。</p></li>										
				</ul>
			</li>
			<li class="item7"><a href="#" title="click here">請問商品如有損壞該如何處理？</a>
				<ul>
					<li class="subitem1"><p>若商品尚在保固期間內而本身有瑕疵(非外力造成的損壞)，請聯繫網站管理員。</p></li>										
				</ul>
			</li>
			<li class="item8"><a href="#" title="click here">如何聯繫客服人員？</a>
				<ul>
					<li class="subitem1"><p>客服電話 0800-098-668 時間:AM09:00-PM21:00，或於聯絡我們留言，我們將於上班時間儘快為您處理。</p></li>										
				</ul>
			</li>
		</ul> 
		<!-- script for tabs -->
		<script type="text/javascript">
			$(function() {
			
				var menu_ul = $('.faq > li > ul'),
					   menu_a  = $('.faq > li > a');
				
				menu_ul.hide();
			
				menu_a.click(function(e) {
					e.preventDefault();
					if(!$(this).hasClass('active')) {
						menu_a.removeClass('active');
						menu_ul.filter(':visible').slideUp('normal');
						$(this).addClass('active').next().stop(true,true).slideDown('normal');
					} else {
						$(this).removeClass('active');
						$(this).next().stop(true,true).slideUp('normal');
					}
				});
			
			});
		</script>
		<!-- script for tabs -->   
	</div>
</div>
@endsection