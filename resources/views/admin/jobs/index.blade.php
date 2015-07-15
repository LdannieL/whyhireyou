@extends('app')

@section('content')
    <div class="page-header clearfix">
        <h1 class="pull-left">Jobs</h1>
         <a class="btn btn-success pull-right" href="{{ route('admin.jobs.create') }}">Create</a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CATEGORY_ID</th>
                        <th>USER_ID</th>
                        <th>TYPE_ID</th>
                        <th>COMPANY_NAME</th>
                        <th>TITLE</th>
                        <th>DESCRIPTION</th>
                        <th>CITY</th>
                        <th>STATE</th>
                        <th>CONTACT_EMAIL</th>
                        <th class="text-right">OPTIONS</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($jobs as $job)
                <tr>
                    <td>{{$job->id}}</td>
                    <td>{{$job->category_id}}</td>
                    <td>{{$job->user_id}}</td>
                    <td>{{$job->type_id}}</td>
                    <td>{{$job->company_name}}</td>
                    <td>{{$job->title}}</td>
                    <td>{{$job->description}}</td>
                    <td>{{$job->city}}</td>
                    <td>{{$job->state}}</td>
                    <td>{{$job->contact_email}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.jobs.show', $job->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.jobs.edit', $job->id) }}">Edit</a>
                        <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>

            {!! $jobs->render() !!}
        </div>
    </div>


@endsection