@extends('app')

@section('content')
    <div class="page-header">
        <h1>Profiles / Edit </h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <p>There were some problems with your input.</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.profiles.update', $profile->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$profile->id}}</p>
                </div>

                <div class="form-group @if($errors->has('style')) has-error @endif">
                       <label for="style-field">Style</label>
                    <input type="text" id="style-field" name="style" class="form-control" value="{{ $profile->style }}"/>
                       @if($errors->has("style"))
                        <span class="help-block">{{ $errors->first("style") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('description')) has-error @endif">
                       <label for="description-field">Description</label>
                    <textarea class="form-control" id="description-field" rows="3" name="description">{{ $profile->description }}</textarea>
                       @if($errors->has("description"))
                        <span class="help-block">{{ $errors->first("description") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('skills')) has-error @endif">
                       <label for="skills-field">Skills</label>
                    <textarea class="form-control" id="skills-field" rows="3" name="skills">{{ $profile->skills }}</textarea>
                       @if($errors->has("skills"))
                        <span class="help-block">{{ $errors->first("skills") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('quote')) has-error @endif">
                       <label for="quote-field">Quote</label>
                    <textarea class="form-control" id="quote-field" rows="3" name="quote">{{ $profile->quote }}</textarea>
                       @if($errors->has("quote"))
                        <span class="help-block">{{ $errors->first("quote") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('profile')) has-error @endif">
                       <label for="profile-field">Profile</label>
                    <input type="text" id="profile-field" name="profile" class="form-control" value="{{ $profile->profile }}"/>
                       @if($errors->has("profile"))
                        <span class="help-block">{{ $errors->first("profile") }}</span>
                       @endif
                    </div>

                <a class="btn btn-default" href="{{ route('admin.profiles.index') }}">Back</a>
                <button class="btn btn-primary" type="submit" >Save</button>
            </form>
        </div>
    </div>


@endsection