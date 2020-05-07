<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Register</title>
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
			<form action="{{url('/akun/action')}}" method="POST">
				{{ csrf_field() }}
				<h3>Registration Form</h3>
				<div class="form-wrapper">
					<input type="text" name="username" placeholder="Username" class="form-control">
					<i class="zmdi zmdi-account"></i>
				</div>
				<div class="form-wrapper">
					<input type="text" name="email" placeholder="Email" class="form-control">
					<i class="zmdi zmdi-email"></i>
				</div>
				<div class="form-wrapper">
					<input type="password" name="password" placeholder="Password" class="form-control">
					<i class="zmdi zmdi-lock"></i>
				</div>
				<div class="form-wrapper">
					<input type="text" name="no_hp" placeholder="Phone Number" class="form-control">
					<i class="zmdi zmdi-phone"></i>
				</div>
				<div class="form-wrapper">
					<input type="text" name="alamat" placeholder="Address" class="form-control">
					<i class="zmdi zmdi-home"></i>
				</div>

				<input type="hidden" name="status" value="active">
				<input type="hidden" name="role_id" value="3">

				<button>Register
					<i class="zmdi zmdi-arrow-right"></i>
				</button>
			</form>
		</div>
	</div>

</body>

</html>