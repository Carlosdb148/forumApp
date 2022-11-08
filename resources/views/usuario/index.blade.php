<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ url('assets/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('assets//vendor/bootstrap/css/bootstrap.min.css') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('assets//fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('assets//vendor/animate/animate.css') }}"/>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ url('assets//vendor/css-hamburgers/hamburgers.min.css') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('assets//vendor/select2/select2.min.css') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ url('assets//css/util.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ url('assets///css/main.css') }}"/>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			
				
				<div class="login100-pic js-tilt" data-tilt>
					<img src="/laraveles/forumApp/public/assets/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="{{ url('usuario/login') }}" method="post">
					@csrf
						@if(session()->has('error'))
							<div class="alert alert-info mx-auto" style="height:50px">{{ session()->get('error') }}</div>
						@endif
					<span class="login100-form-title">
						Member Login
					</span>
						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="correo" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						</div>
					

					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="{{ url('usuario/create') }}">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{ url('assets////vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('assets////vendor/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ url('assets////vendor/vendor/bootstrap/js/popper.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('assets////vendor/bootstrap/js/popper.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ url('assets////vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ url('assets/////js/main.js') }}"></script>

</body>
</html>