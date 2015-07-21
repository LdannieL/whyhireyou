<?php session_start();?>
@extends('layout1')

@section('content')
    <div class="page-header">
        <h1>Talent Star</h1>
    </div>


    <div class="row">
        <div class="col-md-12">

      
 {{--        <form action="/statement/2" method="POST" style="display: inline;">
                <tr>
                <td>{{$statement->text}}</td>
                @foreach($choices as $choice)
                    <td>{{$choice->text}}</td>
                @endforeach
                  {{--   <td>{{$statement->statement_number}}</td>
                            <button class="btn btn-danger" type="submit">Next</button>
                        </form>
                    </td>
                </tr> --}} 

{{--         <main>
        <div class="container"> --}}
            <div class="current">Statement: {{$statement->statement_number}}</div>
            <p class="question">
                {{$statement->text}}
            </p>
{{--             {!! Form::model($statement, array('action' => array('StatementController@processForm', $statement->id))) !!} --}}
            {!! Form::model($statement, array('action' => 'StatementController@processForm')) !!}
           {{--  <form method="post" action="process.php"> --}}
                <ul class="choices">
                    @foreach($choices as $choice)
           {{--          <li><button name="choice" type="submit" class="btn btn-lg btn-primary btn-block" value="{{ $choice->id }}" />{{$choice->text}}</li> --}}
                    {{-- <li><input name="choice" type="radio" value="{{$choice->id}}" />{{$choice->text}}</li> --}}
                    <li><input name="choice" type="radio" value="{{ old("choice") }}" />{{$choice->text}}</li>
                   {{--      <li>{!!Form::radio('choice', '{{ $choice->id }}' ) !!}
                        {{$choice->text}}</li> --}}
                    @endforeach
                <input type="hidden" name="number" value="{{$statement->id}}" />
                <input type="hidden" name="choice_id" value="{{$choice->id}}" />
                </ul>


                {{--                  @if($statement->id == 15)
                             {!! Form::submit('Submit') !!}  
                            @else
                            <a class="btn btn-lg btn-primary btn-block" href="/statement/{{$statement->id - 1}}">Back</a>
                            {!! Form::submit('Next', array('class' => 'btn', 'href' => "/statement/{{$statement->id + 1}}" )) !!} 
                            <a class="btn btn-lg btn-primary btn-block" href="/statement/{{$statement->id + 1}}">Next</a>
                            @endif --}}
            
            @if($statement->id == 15)
             {!! Form::submit('Submit') !!}  
            @else
            <a class="btn btn-lg btn-primary btn-block" href="/statement/{{$statement->id - 1}}">Back</a>
{{--             {!! Form::submit('Next', array('class' => 'btn', 'href' => "/statement/{{$statement->id + 1}}" )) !!}  --}}
            {!! Form::submit('Next') !!}
            @endif
           {{--  {!! Form::submit('Next') !!}  --}}   
            {!! Form::close() !!}
        </div>
        <br>
        <a class="btn btn-lg btn-primary btn-block" href="/" class="restart">Restart</a>



{{-- </div>
    </main> --}}   

            {{-- <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$statement->id}}</p>
                </div>
                <div class="form-group">
                     <label for="statement_number">STATEMENT_NUMBER</label>
                     <p class="form-control-static">{{$statement->statement_number}}</p>
                </div>
                    <div class="form-group">
                     <label for="text">TEXT</label>
                     <p class="form-control-static">{{$statement->text}}</p>
            </form>
 --}}
{{--             <div class="btn-group">
            <a class="btn btn-default" href="{{ route('statements.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('statements.edit', $statement->id) }}">Edit</a>
            <form action="#/$statement->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </div> --}}
        </div>
    </div>


@endsection