@extends('layout1')

@section('content')
    <div class="page-header clearfix">
        <h1 class="pull-left">Why Hire You</h1><br>
    </div>

	<div class="type">
		<span style="background:{{ $job->type->color }}"> {{ $job->type->name }} </span>
	</div>
	<div class="description">
		<h5> {{ $job->title }} ({{ $job->city }}, {{ $job->state }})</h5>
		<p><span id="list_date">
			{{{ date('Y-m-d', strtotime($job->created_at))}}}
		</span></p>
		{!! $job->description !!} 
		
	</div>
	<p>{!! link_to_route('home', '&lsaquo; Back') !!}</p>
@stop