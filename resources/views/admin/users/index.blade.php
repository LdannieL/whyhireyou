@extends('admin.layout')

@section('content')
    <div class="page-header clearfix">
        <h1 class="pull-left">Users</h1>
         <a class="btn btn-success pull-right" href="{{ route('admin.users.create') }}">Create</a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PASSWORD</th>
                        <th>ROLE</th>
                        <th>IMAGE</th>
                        <th>REMEMBER_TOLKEN</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->image}}</td>
                    <td>{{$user->remember_tolken}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.users.show', $user->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>

            {!! $users->render() !!}
        </div>
    </div>


@endsection