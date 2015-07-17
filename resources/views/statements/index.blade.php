@extends('layout1')

@section('content')
    <div class="page-header clearfix">
        <h1 class="pull-left">Statements</h1>
         <a class="btn btn-success pull-right" href="{{ route('statements.create') }}">Create</a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>STATEMENT_NUMBER</th>
                        <th>TEXT</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($statements as $statement)
                <tr>
                    <td>{{$statement->id}}</td>
                    <td>{{$statement->statement_number}}</td>
                    <td>{{$statement->text}}</td>
                   

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('statements.show', $statement->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('statements.edit', $statement->id) }}">Edit</a>
                        <form action="{{ route('statements.destroy', $statement->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>

            {!! $statements->render() !!}
        </div>
    </div>


@endsection