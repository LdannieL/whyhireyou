@extends('admin.layout')

@section('content')
    <div class="page-header">
        <h1>Jobs / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$job1->id}}</p>
                </div>
                <div class="form-group">
                     <label for="category_id">CATEGORY</label>
                     <p class="form-control-static">{{$job1->category->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="user_id">USER</label>
                     <p class="form-control-static">{{$job1->user->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="type_id">TYPE</label>
                     <p class="form-control-static">{{$job1->type->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="company_name">COMPANY_NAME</label>
                     <p class="form-control-static">{{$job1->company_name}}</p>
                </div>
                    <div class="form-group">
                     <label for="title">TITLE</label>
                     <p class="form-control-static">{{$job1->title}}</p>
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <p class="form-control-static">{{$job1->description}}</p>
                </div>
                    <div class="form-group">
                     <label for="city">CITY</label>
                     <p class="form-control-static">{{$job1->city}}</p>
                </div>
                    <div class="form-group">
                     <label for="state">STATE</label>
                     <p class="form-control-static">{{$job1->state}}</p>
                </div>
                    <div class="form-group">
                     <label for="contact_email">CONTACT_EMAIL</label>
                     <p class="form-control-static">{{$job1->contact_email}}</p>
                </div>
            </form>

            <div class="btn-group">
            <a class="btn btn-default" href="{{ route('admin.job1s.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.job1s.edit', $job1->id) }}">Edit</a>
            <form action="#/$job1->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </div>
        </div>
    </div>


@endsection