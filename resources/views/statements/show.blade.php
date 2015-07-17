@extends('layout1')

@section('content')
    <div class="page-header">
        <h1>Statements / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
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

            <div class="btn-group">
            <a class="btn btn-default" href="{{ route('statements.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('statements.edit', $statement->id) }}">Edit</a>
            <form action="#/$statement->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </div>
        </div>
    </div>


@endsection