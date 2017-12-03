<!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:18:23 GMT -->
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title>莲叶翡翠管理后台 - 登录</title>
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link href="{{ loadStatic('admin/css/bootstrap.min14ed.css') }}" rel="stylesheet" />
	<link href="{{ loadStatic('admin/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
	<link href="{{ loadStatic('admin/css/animate.min.css') }}" rel="stylesheet" />
	<link href="{{ loadStatic('admin/css/style.min.css') }}" rel="stylesheet" />
	<!--[if lt IE 9]>
	<meta http-equiv="refresh" content="0;ie.html" />
	<![endif]-->
	<script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>

<body class="gray-bg">
<div class="middle-box text-center loginscreen  animated fadeInDown">
	<div>
		<div>


		</div>
		<h3>欢迎使用 莲叶翡翠管理后台</h3>

		<form class="m-t" role="form" action="{{ url('admin/doLogin') }}" method="post">
			<div class="login-content">
				@if (session('error'))
					<div class="alert alert-danger">
						{{ session('error') }}
					</div>
				@endif
				@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif
					{{ csrf_field() }}
					<div class="form-group m-b-20">
						<input type="text" name="adminname" class="form-control input-lg" placeholder="请输入账户名" required/>
					</div>
					<div class="form-group m-b-20">
						<input type="password" name="password" class="form-control input-lg" placeholder="请输入账户密码" required/>
					</div>
					<div class="form-group m-b-20 code">
						<label>
							<input class="form-control input-md" name="captcha"  placeholder="请输入验证码" required>
						</label>
						<img src="{{ captcha_src() }}" onclick="javaScript:$(this).attr('src','{{ captcha_src() }}'+Math.random())" alt="点击刷新">
					</div>
					<div class="login-buttons">
						<button type="submit" class="btn btn-success btn-block btn-lg">登录</button>
					</div>
					<div class="m-t-20">
						还未加入? 点击 <a href="{{url('agent/register')}}">这里</a> 注册.
					</div>
			</div>

		</form>
	</div>
</div>

<script src="{{ loadStatic('admin/js/jquery.min.js') }}"></script>
<script src="{{ loadStatic('admin/js/bootstrap.min.js') }}"></script>
</body>


</html>
