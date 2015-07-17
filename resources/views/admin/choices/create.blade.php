@extends('app')

@section('content')
    <div class="page-header">
        <h1>Choices / Create </h1>
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

            <form action="{{ route('admin.choices.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('statement_id')) has-error @endif">
                       <label for="statement_id-field">Statement_id</label>
                    <input type="text" id="statement_id-field" name="statement_id" class="form-control" value="{{ old("statement_id") }}"/>
                       @if($errors->has("statement_id"))
                        <span class="help-block">{{ $errors->first("statement_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('statement_number')) has-error @endif">
                       <label for="statement_number-field">Statement_number</label>
                    <input type="text" id="statement_number-field" name="statement_number" class="form-control" value="{{ old("statement_number") }}"/>
                       @if($errors->has("statement_number"))
                        <span class="help-block">{{ $errors->first("statement_number") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('text')) has-error @endif">
                       <label for="text-field">Text</label>
                    <input type="text" id="text-field" name="text" class="form-control" value="{{ old("text") }}"/>
                       @if($errors->has("text"))
                        <span class="help-block">{{ $errors->first("text") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('profile')) has-error @endif">
                       <label for="profile-field">Profile</label>
                    <input type="text" id="profile-field" name="profile" class="form-control" value="{{ old("profile") }}"/>
                       @if($errors->has("profile"))
                        <span class="help-block">{{ $errors->first("profile") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('value')) has-error @endif">
                       <label for="value-field">Value</label>
                    <input type="text" id="value-field" name="value" class="form-control" value="{{ old("value") }}"/>
                       @if($errors->has("value"))
                        <span class="help-block">{{ $errors->first("value") }}</span>
                       @endif
                    </div>

                <a class="btn btn-default" href="{{ route('admin.choices.index') }}">Back</a>
                <button class="btn btn-primary" type="submit">Create</button>
            </form>
        </div>
    </div>


@endsection