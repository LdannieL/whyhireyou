@extends('layout1')

@section('content')
{{-- $number = (int) $_GET['n']; --}}
<div id="quiz" class="col_12 column">
<h1>Talent Star</h1>
<h3>You’re Unique. Discover the talents that drive your success.</h3>
<h3>Unlock your personal leadership style with Talent Star.</h3> 
<h4>Which statement best describes you?</h4>

{{-- <main>
		<div class="container">
			<div class="current">Question {{ $statement->statement_number }} </div>
			<p class="question">
		{{ $question->text }}
			</p>
			<form method="post" action="#">
			<input type="radio" name="choice" value="" />
				<ul class="choices">
					@foreach($choices as $choice)
						<li><button name="choice" type="submit" class="btn btn-lg btn-primary btn-block" value="{{ $choice->id }}" />{{ $choice->text }}</li>
					@endforeach
				<input type="hidden" name="number" value="{{ $n }}" />
				</ul>
			</form>
			</div>
		<a class="btn btn-lg btn-primary btn-block" href="#" class="restart">Next</a>
		</div>
	</main> --}}





</div>

@stop