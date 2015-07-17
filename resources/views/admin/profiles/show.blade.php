@extends('app')

@section('content')
    <div class="page-header">
        <h1>Profiles / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$profile->id}}</p>
                </div>
                <div class="form-group">
                     <label for="style">STYLE</label>
                     <p class="form-control-static">{{$profile->style}}</p>
                </div>
                    <div class="form-group">
                     <label for="description">DESCRIPTION</label>
                     <p class="form-control-static">{{$profile->description}}</p>
                </div>
                    <div class="form-group">
                     <label for="skills">SKILLS</label>
                     <p class="form-control-static">{{$profile->skills}}</p>
                </div>
                    <div class="form-group">
                     <label for="quote">QUOTE</label>
                     <p class="form-control-static">{{$profile->quote}}</p>
                </div>
                    <div class="form-group">
                     <label for="profile">PROFILE</label>
                     <p class="form-control-static">{{$profile->profile}}</p>
                </div>
            </form>

            <div class="btn-group">
            <a class="btn btn-default" href="{{ route('admin.profiles.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.profiles.edit', $profile->id) }}">Edit</a>
            <form action="#/$profile->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </div>
        </div>
    </div>


@endsection