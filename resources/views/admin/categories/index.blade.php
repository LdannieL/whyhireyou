@extends('admin.layout')

@section('content')
    <div class="page-header clearfix">
        <h1 class="pull-left">Categories</h1>
         <a class="btn btn-success pull-right" href="{{ route('admin.categories.create') }}">Create</a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.categories.show', $category->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.categories.edit', $category->id) }}">Edit</a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
            {!! $categories->render() !!}
        </div>
    </div>


@endsection