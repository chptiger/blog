@extends('layouts.admin')
@section('content')
	<div class="login_box">
		<h1>Blog</h1>
		<h2>Welcome to Blog Admin System</h2>
		<div class="form">
			@if(session('msg'))
				<p style="color:red">{{session('msg')}}</p>
			@endif
			<form action="" method="post">
				{{csrf_field()}}
				<ul>
					<li>
					<input type="text" name="user_name" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="user_pass" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					<li>
						<input type="text" class="code" name="code"/>
						<span><i class="fa fa-check-square-o"></i></span>
						{{--<img src="/blog/admin/code" alt="">--}}
						<img src="{{url('/admin/code')}}" alt="" onclick="this.src='{{url('/admin/code')}}?'+Math.random()">

					</li>
					<li>
						<input type="submit" value="Login"/>
					</li>
				</ul>
			</form>
			<p><a href="#"> Home</a> &copy; 2016 Powered by Thomas Xu
		</div>
	</div>
@endsection