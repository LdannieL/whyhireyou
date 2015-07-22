@extends('layout1')

@section('content')
	<body>
		<main>
			<div class="container">
				<h2>You're Done!</h2>
				<p>Congrats! You have completed the quiz.</p>
				<br>
				<p>Final Score:</p>
				{{-- <p>Your primary style is:{{ $primary_style }}</p> --}}
				<p>Your primary style is:<h3>{{ $primary_style[0] }}</h3></p>
				<p>{{ $description }}</p>
				<p>You are: {{ $skills }}</p>
				<p>{{ $quote }}</p>
				<br>
				{{-- <p>Your secondary style is: {{ $primary_style[1] }}</p> --}}
				<p>Your secondary style is: <h4>{{ $secondary_style[0] }}</h4></p>
{{-- <p>Your secondary style is: {{ $secondary_style }}</p> --}}
	{{-- 			<p>Your primary style is:{{ $primary_style[0] }}</p>
				<p>{{ $description_primary }}</p>
				<p>You are: {{ $skills_primary }}</p>
				<p>{{ $quote_primary }}</p>
				<p>Your secondary style is: {{ $secondary_style[0] }}</p> --}}
				<p>{{ $description_secondary }}</p>
				<p>You are: {{ $skills_secondary }}</p>
				<p>{{ $quote_secondary }}</p>
				<a class="btn btn-lg btn-primary btn-block" href="/statement/1" class="start">Take Again</a>
			</div>
		</main>
@endsection