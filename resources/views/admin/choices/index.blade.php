@extends('app')

@section('content')
    <div class="page-header clearfix">
        <h1 class="pull-left">Choices</h1>
         <a class="btn btn-success pull-right" href="{{ route('admin.choices.create') }}">Create</a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>STATEMENT_ID</th>
                        <th>STATEMENT_NUMBER</th>
                        <th>TEXT</th>
                        <th>PROFILE</th>
                        <th>VALUE</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($choices as $choice)
                <tr>
                    <td>{{$choice->id}}</td>
                    <td>{{$choice->statement_id}}</td>
                    <td>{{$choice->statement_number}}</td>
                    <td>{{$choice->text}}</td>
                    <td>{{$choice->profile}}</td>
                    <td>{{$choice->value}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.choices.show', $choice->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.choices.edit', $choice->id) }}">Edit</a>
                        <form action="{{ route('admin.choices.destroy', $choice->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>

            {!! $choices->render() !!}
        </div>
    </div>


@endsection