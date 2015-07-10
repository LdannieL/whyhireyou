@extends('layout1')

@section('content')
  <h1>Search Results</h1>

  @if (!count($jobs))
    <p>Nothing found, please try a different search.</p>
  @else 
    <ul>
      @foreach($jobs as $job)
        <li>
          {!! link_to_route('job', $job->title, array($job->id)) !!}       
        </li>
      @endforeach 
    </ul>

    {!! $jobs->render() !!}
  @endif
@stop