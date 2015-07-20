@extends('layout1')

@section('content')
    <div class="page-header">
        <h1>Statements / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <p>There were some problems with your input.</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.statements.update', $statement->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$statement->id}}</p>
                </div>

                <div class="form-group @if($errors->has('statement_number')) has-error @endif">
                       <label for="statement_number-field">Statement_number</label>
                    <input type="text" id="statement_number-field" name="statement_number" class="form-control" value="{{ $statement->statement_number }}"/>
                       @if($errors->has("statement_number"))
                        <span class="help-block">{{ $errors->first("statement_number") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('text')) has-error @endif">
                       <label for="text-field">Text</label>
                    <input type="text" id="text-field" name="text" class="form-control" value="{{ $statement->text }}"/>
                       @if($errors->has("text"))
                        <span class="help-block">{{ $errors->first("text") }}</span>
                       @endif
                    </div>

                <a class="btn btn-default" href="{{ route('admin.statements.index') }}">Back</a>
                <button class="btn btn-primary" type="submit" >Save</button>
            </form>
        </div>
    </div>


@endsection