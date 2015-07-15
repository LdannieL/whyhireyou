@extends('admin.layout')

@section('content')
    <div class="page-header clearfix">
        <h1 class="pull-left">Jobs</h1>
         <a class="btn btn-success pull-right" href="{{ route('admin.job1s.create') }}">Create</a>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CATEGORY</th>
                        <th>USER</th>
                        <th>TYPE</th>
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

                @foreach($job1s as $job1)
                <tr>
                    <td>{{$job1->id}}</td>
                    <td>{{ $job1->category->name }}</td>
                    <td>{{ $job1->user->name }}</td>
                    <td>{{ $job1->type->name }}</td>
                    <td>{{$job1->company_name}}</td>
                    <td>{{$job1->title}}</td>
                    <td>{{$job1->description}}</td>
                    <td>{{$job1->city}}</td>
                    <td>{{$job1->state}}</td>
                    <td>{{$job1->contact_email}}</td>

                    <td class="text-right">
                        <a class="btn btn-primary" href="{{ route('admin.job1s.show', $job1->id) }}">View</a>
                        <a class="btn btn-warning " href="{{ route('admin.job1s.edit', $job1->id) }}">Edit</a>
                        <form action="{{ route('admin.job1s.destroy', $job1->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>

            {!! $job1s->render() !!}
        </div>
    </div>


@endsection