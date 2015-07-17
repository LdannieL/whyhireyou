@extends('app')

@section('content')
    <div class="page-header clearfix">
        <h1 class="pull-left">Profiles</h1>
         <a class="btn btn-success pull-right" href="{{ route('admin.profiles.create') }}">Create</a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>STYLE</th>
                        <th>DESCRIPTION</th>
                        <th>SKILLS</th>
                        <th>QUOTE</th>
                        <th>PROFILE</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($profiles as $profile)
                <tr>
                    <td>{{$profile->id}}</td>
                    <td>{{$profile->style}}</td>
                    <td>{{$profile->description}}</td>
                    <td>{{$profile->skills}}</td>
                    <td>{{$profile->quote}}</td>
                    <td>{{$profile->profile}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.profiles.show', $profile->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.profiles.edit', $profile->id) }}">Edit</a>
                        <form action="{{ route('admin.profiles.destroy', $profile->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>

            {!! $profiles->render() !!}
        </div>
    </div>


@endsection