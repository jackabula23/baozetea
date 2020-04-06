@extends('layouts.index')

@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
			<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li class="active">與我們聯繫</li>
		</ol>
	</div>
</div>
<!-- //breadcrumbs -->
<!-- contact -->
<div class="about">
	<div class="w3_agileits_contact_grids">
		<div class="col-md-6 w3_agileits_contact_grid_left">
			<div class="agile_map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.659345551478!2d121.47289241500582!3d25.011688783982855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a825b385121d%3A0x1b13b724d735fe1e!2zMjIw5paw5YyX5biC5p2_5qmL5Y2A5rCR55Sf6Lev5LiA5q61MjXomZ8y!5e0!3m2!1szh-TW!2stw!4v1586167149559!5m2!1szh-TW!2stw" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
		<div class="col-md-6 w3_agileits_contact_grid_right">
			<h2 class="w3_agile_header">與我們聯繫</h2>

			<form action="#" method="post">
				<span class="input input--ichiro">
					<input class="input__field input__field--ichiro" type="text" id="input-25" name="Name" placeholder=" " required="" />
					<label class="input__label input__label--ichiro" for="input-25">
						<span class="input__label-content input__label-content--ichiro">您的姓名</span>
					</label>
				</span>
				<span class="input input--ichiro">
					<input class="input__field input__field--ichiro" type="email" id="input-26" name="Email" placeholder=" " required="" />
					<label class="input__label input__label--ichiro" for="input-26">
						<span class="input__label-content input__label-content--ichiro">您的電子郵件</span>
					</label>
				</span>
				<textarea name="Message" placeholder="請留言..." required=""></textarea>
				<input type="submit" value="Submit">
			</form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- contact -->
@endsection