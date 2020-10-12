
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Login</title>
<script src="{{ asset('admin_assets/js/admin.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{ asset('admin_assets/css/admin.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>

<!--header start here-->
<div class="header">
		<div class="header-main">
		       <h1>Login Form</h1>
			<div class="header-bottom">
				<div class="header-right w3agile">

					<div class="header-left-bottom agileinfo">

						<form method="post"action="{{route('admin.uplogin')}}">
						<input type="text"  value="User name" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}"/>
					<input type="password"  value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
						<div class="remember">

						<div class="clear"> </div>
					  </div>

					  <button type="submit"  style="width:75px;height:40px">Submit</button>
					  {{ csrf_field() }}
					</form>


				</div>
				</div>

			</div>
		</div>
</div>
<!--header end here-->
<div class="copyright">
	<p>© 2020 MangaPlay </p>
</div>
<!--footer end here-->
</body>
</html>
