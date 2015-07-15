@extends('app')

@section('content')
    <div class="page-header">
        <h1>Jobs / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$job->id}}</p>
                </div>
                <div class="form-group">
                     <label for="category_id">CATEGORY_ID</label>
                     <p class="form-control-static">{{$job->category_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="user_id">USER_ID</label>
                     <p class="form-control-static">{{$job->user_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="type_id">TYPE_ID</label>
                     <p class="form-control-static">{{$job->type_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="company_name">COMPANY_NAME</label>
                     <p class="form-control-static">{{$job->company_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="title">TITLE</label>
                     <p class="form-control-static">{{$job->title}}</p>
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <p class="form-control-static">{{$job->description}}</p>
                </div>
                    <div class="form-group">
                     <label for="city">CITY</label>
                     <p class="form-control-static">{{$job->city}}</p>
                </div>
                    <div class="form-group">
                     <label for="state">STATE</label>
                     <p class="form-control-static">{{$job->state}}</p>
                </div>
                    <div class="form-group">
                     <label for="contact_email">CONTACT_EMAIL</label>
                     <p class="form-control-static">{{$job->contact_email}}</p>
                </div>
            </form>

            <div class="btn-group">
            <a class="btn btn-default" href="{{ route('admin.jobs.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.jobs.edit', $job->id) }}">Edit</a>
            <form action="#/$job->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </div>
        </div>
    </div>


@endsection