<?php session_start();?>
@extends('layout1')

@section('content')
	<body>
		<main>
			<div class="container">
				<h2>You're Done!</h2>
				<p>Congrats! You have completed the quiz.</p>
				<p>Final Score:</p>
				<p>Your primary style is:{{ $primary_style[0] }}</p>
				<p>{{ $description }}</p>
				<p>You are: {{ $skills }}</p>
				<p>{{ $quote }}</p>
				{{-- <p>Your secondary style is: {{ $primary_style[1] }}</p> --}}
				<a class="btn btn-lg btn-primary btn-block" href="/statement/1" class="start">Take Again</a>
			</div>
		</main>
@endsection