<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>CMS | Log in</title>
		<link rel="icon" type="image/png" href=""/>
<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="{{asset('public/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('public/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css')}}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{asset('public/AdminLTE/bower_components/Ionicons/css/ionicons.min.css')}}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('public/AdminLTE/dist/css/AdminLTE.min.css')}}">
	<!-- iCheck -->
	<link rel="stylesheet" href="{{asset('public/AdminLTE/plugins/iCheck/square/blue.css')}}">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<b>CMS</b>
	</div>

	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg">Register</p>
		@include('errors.error')
		<form id='create' action="{{route('register')}}" method="POST" >
			{{csrf_field()}}
			<div class="form-group{{ $errors->has('name') ? ' has-error' : "" }}">
				Name : <input type="text"
							  value="{{Request::old('name')}}"
							  class="form-control"
							  name="name"
							  placeholder="Name">
			</div>
			<div class="form-group{{ $errors->has('email') ? ' has-error' : "" }}">
				Email : <input type="email" class="form-control" name="email"
							   value="{{Request::old('email')}}"
							   placeholder="Message Email">
			</div>
			<div class="form-group{{ $errors->has('password') ? ' has-error' : "" }}">
				Password : <input type="password" class="form-control" name="password"
								  value="{{Request::old('password')}}"
								  placeholder="Password">
			</div>
			<div class="form-group{{ $errors->has('password') ? ' has-error' : "" }}">
				Password_Confirmation : <input type="password" class="form-control"
											   name="password_confirmation"
											   value="{{Request::old('password')}}"
											   placeholder="Message Password">
			</div>
			<div align="center">
				<input type="submit" class="btn btn-primary" value="Create">
			</div>
		</form>
		<div class="social-auth-links text-center">
			<p>- OR -</p>
			{{-- <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
				 Facebook</a>
			 <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
				 Google+</a>--}}
		</div>
		<!-- /.social-auth-links -->
		<div class="row">
			<div class="col-md-8">
				<a href="{{url('login')}}">Login</a>
			</div>
		</div>
		{{--<a href="register.html" class="text-center">Register a new membership</a>--}}

	</div>
	<!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{asset('public/AdminLTE/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('public/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('public/AdminLTE/plugins/iCheck/icheck.min.js')}}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
<!-- jsvalidation -->
</body>
</html>