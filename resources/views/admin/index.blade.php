@extends('layouts.admin')
@section('content')
	<!--head start-->
	<div class="top_box">
		<div class="top_left">
			<div class="logo">blog.admin</div>
			<ul>
				<li><a href="#" class="active">Home</a></li>
				<li><a href="#">Admin</a></li>
			</ul>
		</div>
		<div class="top_right">
			<ul>
				<li>Admin：admin</li>
				<li><a href="pass.html" target="main">Password</a></li>
				<li><a href="#">Exit</a></li>
			</ul>
		</div>
	</div>
	<!--Head end-->

	<!--left sidebar start -->
	<div class="menu_box">
		<ul>
			<li>
				<h3><i class="fa fa-fw fa-clipboard"></i>Tool</h3>
				<ul class="sub_menu">
					<li><a href="add.html" target="main"><i class="fa fa-fw fa-plus-square"></i>Add</a></li>
					<li><a href="list.html" target="main"><i class="fa fa-fw fa-list-ul"></i>List</a></li>
					<li><a href="tab.html" target="main"><i class="fa fa-fw fa-list-alt"></i>Tab</a></li>
					<li><a href="img.html" target="main"><i class="fa fa-fw fa-image"></i>Graphs</a></li>
				</ul>
			</li>
			<li>
				<h3><i class="fa fa-fw fa-cog"></i>System</h3>
				<ul class="sub_menu">
					<li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>config</a></li>
					<li><a href="#" target="main"><i class="fa fa-fw fa-database"></i>backup</a></li>
				</ul>
			</li>
			<li>
				<h3><i class="fa fa-fw fa-thumb-tack"></i>Tool Navigation</h3>
				<ul class="sub_menu">
					<li><a href="http://www.yeahzan.com/fa/facss.html" target="main"><i class="fa fa-fw fa-font"></i>图标调用</a></li>
					<li><a href="http://api.jquery.com/" target="main"><i class="fa fa-fw fa-chain"></i>Jquery</a></li>
					<li><a href="http://tool.c7sky.com/webcolor/" target="main"><i class="fa fa-fw fa-tachometer"></i>配色板</a></li>
					<li><a href="element.html" target="main"><i class="fa fa-fw fa-tags"></i>components</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!--left sidebar end-->

	<!--content start-->
	<div class="main_box">
		<iframe src="{{url('/admin/info')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
	</div>
	<!--content end-->


@endsection


