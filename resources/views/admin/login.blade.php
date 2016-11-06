<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
{{--	<link rel="stylesheet" href="../resources/views/admin/style/css/ch-ui.admin.css">
	<link rel="stylesheet" href="../resources/views/admin/style/font/css/font-awesome.min.css">--}}

	<link rel="stylesheet" href="{{asset("/resources/views/admin/style/css/ch-ui.admin.css")}}">
	<link rel="stylesheet" href="{{asset("/resources/views/admin/style/font/css/font-awesome.min.css")}}">
</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h1>Blog</h1>
		<h2>Welcome to Blog Admin System</h2>
		<div class="form">
			<p style="color:red">Username not correct</p>
			<form action="#" method="post">
				<ul>
					<li>
					<input type="text" name="username" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="password" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					<li>
						<input type="text" class="code" name="code"/>
						<span><i class="fa fa-check-square-o"></i></span>
						<img src="#" alt="">
					</li>
					<li>
						<input type="submit" value="立即登陆"/>
					</li>
				</ul>
			</form>
			<p><a href="#">return Home</a> &copy; 2016 Powered by Thomas Xu
		</div>
	</div>
</body>
</html>