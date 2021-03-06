<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Why Hire You</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	{!! HTML::script('assets/plugins/3d-bold-navigation/js/modernizr.js') !!}<!-- KICKSTART -->
	{!! HTML::style('css/kickstart.css', ['media'=>'all']) !!} <!-- KICKSTART -->
	{!! HTML::style('style.css', ['media'=>'all']) !!}
	{!! HTML::script('js/kickstart.js') !!}<!-- KICKSTART -->	
</head>
<body>
	
</body>
</html>
</head>
<body>
{{-- some style changes --}}
	<div id="container" class="grid">
		<header>
			<div class="col_4 column left">
				<h1><a href="{{ route('home') }}"><strong>WhyHire</strong>You</a></h1>	
			</div>
			<div class="col_2 column right margintop floatright" id="quiz">
			 {{--<style type="text/css">#quiz {display:inline-block; margin-top: 20 px;}</style>--}}
				{{-- <button class="large blue"><i class=" fa-lightbulb-o"><a href="/quiz"> start quizz </a></button> --}}
				<form id="start_quiz" action="/statement">
				<button class="large blue"><i class="fa fa-star-half-empty"></i> start quizz </button>
				</form>
			</div>	
			<div class="col_2 column right floatright">
				<form id="add_job_link" action="{{ route('admin.job1s.create') }}">
				<button class="large green"><i class="fa fa-plus"></i> add job </button>
				</form>
			</div>
			<div class="col_4 column right welcome floatright">
{{-- 				@if(Auth::user()['id'])
					<h6> welcome <strong>{{ Auth::user()['name']}}</strong></h6>
				 link_to_route('auth/logout/{id}', 'logout', array(Auth::user()['id'])) 
					<a href="/auth/logout"><i class="fa fa-user"></i> logout </a></li>
					{{-- link_to_route('auth.logout', 'logout', array(Auth::user()['id'])) !!} --}}
				{{--@endif --}}
				@if(Auth::check())
					{{-- <h6> welcome <strong>{{ Auth::user()['name']}}</strong></h6> --}}
					<h6> welcome <strong>{!! Auth::user()->name !!}</strong></h6>
				 {{-- link_to_route('auth/logout/{id}', 'logout', array(Auth::user()['id'])) --}} 
					<a href="/auth/logout"><i class="fa fa-user"></i> logout </a></li>
					{{-- link_to_route('auth.logout', 'logout', array(Auth::user()['id'])) !!} --}}
				@endif
			</div>
			
			<div class="clearfix"></div>

			<div class="col_1 column floatright">
				<a href="/user/{id}/dashboard"><i class="fa fa-user large green"></i> User Dashboard </a>
			</div>
			<div class="col_1 column floatright">
				<a href="/admin/job1s"><i class="large green"></i> Admin Jobs </a>
			</div>
			<div class="col_1 column floatright">
				<a href="/admin/categories"><i class="large green"></i> Admin Categories</a>
			</div>
			<div class="col_1 column floatright">
				<a href="/admin/types"><i class="large green"></i> Admin Types</a>
			</div>

		</header>

		<div class="col_12 column">
			<!-- Menu Horizontal -->
			<ul class="menu">
				<li>
					<a href="/"><i class="fa fa-home"></i> home </a></li>
				<li>
					<a href="/"><i class="fa fa-desktop"></i> browse jobs </a></li>
				<li>
					<a href="/auth/register"><i class="fa fa-user"></i> register </a></li>
				<li>
					<a href="/auth/login"><i class="fa fa-key"></i> login </a></li>
				<li>
					{{-- <a href="/auth/loginwithfacebook"><i class="fa fa-key"></i> login with facebook </a></li> --}}
					<a href="/auth/login/facebook"><i class="fa fa-facebook"></i> Facebook login </a></li>
				<li>
					<a href="/auth/login/twitter"><i class="fa fa-twitter"></i> Twitter login </a></li>
			{{-- 	<li>
					<a href="/twitter/login"><i class="fa fa-key"></i> new login twitter </a></li>
				<li>
					<a href="/twitter/logout"><i class="fa fa-key"></i> twitter logout</a></li> --}}
				<li>
				{{--{!! link_to_route('loginsocial', 'login with github;', array('github')) !!}--}}
					<a href="/auth/login/github"><i class="fa fa-github"></i> Github login </a></li>	
			</ul>
		</div>

		

		<div class="col_12 column">
			@if (Session::has( 'message') )
				{{-- <div class="notice success"><i class="icon-ok icon-large"></i> --}}
		        <div class="notice success"><i class="icon-ok icon-large"></i>
		            {{{ Session::get('message') }}}
		        <a href="#close" class="icon-remove"></a></div>
	   		@endif
	   		@if(Session::has('error'))
		        <div class="notice error"><i class="icon-remove-sign icon-large"></i>
		            {{Session::get('error')}}
		        <a href="#close" class="icon-remove"></a></div>
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