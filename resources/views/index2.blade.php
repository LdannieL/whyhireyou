@extends('layout1')

@section('content')

<div id="search_area" class="col_12 column">
	<form class="horizontal" method="post" action="/jobs/browse">
		<input name="keywords" id="keywords" type="text" placeholder="Enter keywords...">
		<select name="states" id="select_state">
			<option> select state </option>
			<option value="NY"> New York </option>
			<option value="IL"> Illinois </option>
			<option value="MS"> Massachusetts </option>
			<option value="FL"> Florida </option>
		</select>
		<select name="categories" id="select_category">
			<option> select category </option>
{{-- 			<?php foreach(Category::get() as $category) : ?>
				<option value="{{ $category->id }}">{{ $category->name }}</option>
			<?php endforeach; ?> --}}
		</select>
		<button type="submit"> sumbit </button>
	</form>
</div>
<br>
<h3> latest job listings </h3>

	<ul id="listings">
		@foreach (Job::get() as $job)
			<li class="first">
				<div class="type">
					<span style="background:{{ $job->type->color }}"> {{ $jobs->type->name }} </span>
				</div>
				<div class="description">
					<h5> {{ $jobs->title }} ({{ $jobs->city }}, {{ $jobs->state }})</h5>
					<p><span id="list_date">
						{{{ date('Y-m-d', strtotime($job->created_at))}}}
					</span></p>
					{!! str_limit($job->description) !!} 
					{!! link_to_route('job', 'Read More &rsaquo;', array($job->id)) !!}
					
				</div>
			</li>
		@endforeach
	</ul>

@stop