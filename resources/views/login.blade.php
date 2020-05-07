<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="/assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="/assets/library/style.css">
</head>

<body>

	<div class="wrapper" style="background-image: url('/assets/image/bg-registration-form-1.jpg');">
		<div class="inner">
			<div class="image-holder">
				<img src="/assets/image/registration-form-1.jpg" alt="">
			</div>
			<form action="{{url('/login/action')}}" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<h3>Login</h3>
				<div class="form-wrapper">
					<input type="text" name="email" placeholder="Email Address" class="form-control">
					<i class="zmdi zmdi-email"></i>
				</div>
				<div class="form-wrapper">
					<input type="password" name="password" placeholder="Password" class="form-control">
					<i class="zmdi zmdi-lock"></i>
				</div>

				Don't have an account ?&nbsp;&nbsp;<a href="{{url('/register')}}">Register</i></a>

				<button type="submit">Login<i class="zmdi zmdi-arrow-right"></i></button>
				
			</form>
		</div>
	</div>

</body>

</html>