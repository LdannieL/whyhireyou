@extends('admin.layout')

@section('content')
    <div class="page-header clearfix">
        <h1 class="pull-left">Types</h1>
         <a class="btn btn-success pull-right" href="{{ route('admin.types.create') }}">Create</a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>COLOR</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($types as $type)
                <tr>
                    <td>{{$type->id}}</td>
                    <td>{{$type->name}}</td>
                    <td>{{$type->color}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.types.show', $type->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.types.edit', $type->id) }}">Edit</a>
                        <form action="{{ route('admin.types.destroy', $type->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>

            {!! $types->render() !!}
        </div>
    </div>


@endsection