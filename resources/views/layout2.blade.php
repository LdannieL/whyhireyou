<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Why Hire You</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	{!! HTML::script('assets/plugins/3d-bold-navigation/js/modernizr.js') !!}<!-- KICKSTART -->
	{!! HTML::style('css/kickstart.css', ['media'=>'all']) !!} <!-- KICKSTART -->
	{!! HTML::style('style.css') !!}	
</head>
<body>
	
</body>
</html>

<!-- 	<?php
		//echo $this->Html->meta('icon');

		//echo $this->Html->css('kickstart');
		//echo $this->Html->css('style');

		//echo $this->Html->script('jquery');
		//echo $this->Html->script('kickstart');

		//echo $this->fetch('meta');
		//echo $this->fetch('css');
		//echo $this->fetch('script');
	?> -->

</head>
<body>
	<div id="container" class="grid">
		<header>
			<div class="col_4 column">
				<h1><a href="{{ route('home') }}"><strong>jobs</strong>Board</a></h1>	
			</div>
			<div class="col_6 column right welcome">
				@if(Auth::user()['id'])
					<h6> welcome <strong>{{ $user->name }}</strong></h6>
					{!! link_to_route('auth/logout', 'logout') !!}
				@endif
			</div>	
			<div class="col_2 column right">
				<form id="add_job_link" action="admin/jobs/create">
				<button class="large green"><i class="fa fa-plus"></i> add job </button>
				</form>
			</div>
		</header>

		<div class="col_12 column">
			<!-- Menu Horizontal -->
<!-- 			<ul class="menu">
				<li <?php //echo ($this->here == '/jobsBoard/' || $this->here == '/jobsBoard/jobs') ? 'class="current"' : ''; ?> >
					<a href="{{ route('/') }}"><i class="fa fa-home"></i> home </a></li>
				<li <?php //echo ($this->here == '/jobsBoard/jobs/browse') ? 'class="current"' : '' ?> >
					<a href="{{ route('/jobs/browse') }}"><i class="fa fa-desktop"></i> browse jobs </a></li>
				<li <?php //echo ($this->here == '/jobsBoard/users/register') ? 'class="current"' : '' ?> >
					<a href="{{ route('/users/register') }}"><i class="fa fa-user"></i> register </a></li>
				<li <?php //echo ($this->here == '/jobsBoard/users/login') ? 'class="current"' : '' ?> >
					<a href="<?php //echo $this->webroot;?>users/login"><i class="fa fa-key"></i> login </a></li>
			</ul> -->
			<ul class="menu">
{{-- 				<li>
					<a href="{{ route('home') }}"><i class="fa fa-home"></i> home </a></li>
				<li>
					<a href="{{ route('home') }}"><i class="fa fa-desktop"></i> browse jobs </a></li>
				<li>
					<a href="{{ route('auth/register') }}"><i class="fa fa-user"></i> register </a></li>
				<li>
					<a href="{{ route('auth/login') }}"><i class="fa fa-key"></i> login </a></li> --}}
				<li>
					<a href="#"><i class="fa fa-home"></i> home </a></li>
				<li>
					<a href="#"><i class="fa fa-desktop"></i> browse jobs </a></li>
				<li>
					<a href="#"><i class="fa fa-user"></i> register </a></li>
				<li>
					<a href="#"><i class="fa fa-key"></i> login </a></li>
			</ul>
		</div>

		

		<div class="col_12 column">
			@if (Session::has( 'message') )
		        <div class="alert-box success">
		            {{{ Session::get('message') }}}
		        </div>
	   		@endif
			@yield('content')
		</div>

		<div class="clearfix"></div>

		<footer>
	        <p> ©2015 WhyHireYou </p>
		</footer>

	</div> <!-- End Grid -->
</body>
</html>