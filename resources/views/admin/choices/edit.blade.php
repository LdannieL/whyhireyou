@extends('app')

@section('content')
    <div class="page-header">
        <h1>Choices / Edit </h1>
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

            <form action="{{ route('admin.choices.update', $choice->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$choice->id}}</p>
                </div>

                <div class="form-group @if($errors->has('statement_id')) has-error @endif">
                       <label for="statement_id-field">Statement_id</label>
                    <input type="text" id="statement_id-field" name="statement_id" class="form-control" value="{{ $choice->statement_id }}"/>
                       @if($errors->has("statement_id"))
                        <span class="help-block">{{ $errors->first("statement_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('profile_id')) has-error @endif">
                       <label for="statement_number-field">Statement_number</label>
                    <input type="text" id="statement_number-field" name="profile_id" class="form-control" value="{{ $choice->profile_id }}"/>
                       @if($errors->has("profile_id"))
                        <span class="help-block">{{ $errors->first("profile_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('text')) has-error @endif">
                       <label for="text-field">Text</label>
                    <input type="text" id="text-field" name="text" class="form-control" value="{{ $choice->text }}"/>
                       @if($errors->has("text"))
                        <span class="help-block">{{ $errors->first("text") }}</span>
                       @endif
                    </div>
{{--                     <div class="form-group @if($errors->has('profile')) has-error @endif">
                       <label for="profile-field">Profile</label>
                    <input type="text" id="profile-field" name="profile" class="form-control" value="{{ $choice->profile }}"/>
                       @if($errors->has("profile"))
                        <span class="help-block">{{ $errors->first("profile") }}</span>
                       @endif
                    </div> --}}
                    <div class="form-group @if($errors->has('value')) has-error @endif">
                       <label for="value-field">Value</label>
                    <input type="text" id="value-field" name="value" class="form-control" value="{{ $choice->value }}"/>
                       @if($errors->has("value"))
                        <span class="help-block">{{ $errors->first("value") }}</span>
                       @endif
                    </div>

                <a class="btn btn-default" href="{{ route('admin.choices.index') }}">Back</a>
                <button class="btn btn-primary" type="submit" >Save</button>
            </form>
        </div>
    </div>


@endsection