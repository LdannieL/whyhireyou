@extends('layout1')

@section('content')

<div id="search_area" class="col_12 column">
	<form class="horizontal" method="post" action="{{ route('search') }}">
		<input name="keywords" id="keywords" type="text" placeholder="Enter keywords...">
		<select name="states" id="select_state">
			<option> select state </option>
				@foreach($jobs as $job)
					{{-- <option value="{{ $job->id }}">{{ $job->state }}</option> --}}
					<option>{{ $job->state }}</option>
				@endforeach
{{-- 			<option value="NY"> New York </option>
			<option value="IL"> Illinois </option>
			<option value="MS"> Massachusetts </option>
			<option value="FL"> Florida </option> --}}
		</select>
		<select name="categories" id="select_category">
			<option> select category </option>
				@foreach($categories as $category)
					{{-- <option value="{{ $category->id }}">{{ $category->name }}</option> --}}
					<option>{{ $category->name }}</option>
				@endforeach
		</select>
		<button type="submit"> search jobs </button>
	</form>
</div>
<br>
<h3> latest job listings </h3>

	<ul id="listings">
		@foreach ($jobs as $job)
			<li class="first">
				<div class="type">
					<span style="background:{{ $job->type->color }}"> {{ $job->type->name }} </span>
				</div>
				<div class="description">
					<h5> {{ $job->title }} ({{ $job->city }}, {{ $job->state }})</h5>
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