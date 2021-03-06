@extends('admin.layout')

@section('content')
    <div class="page-header">
        <h1>Types / Create </h1>
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

            <form action="{{ route('admin.types.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('name')) has-error @endif">
                       <label for="name-field">Name</label>
                    <input type="text" id="name-field" name="name" class="form-control" value="{{ old("name") }}"/>
                       @if($errors->has("name"))
                        <span class="help-block">{{ $errors->first("name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('color')) has-error @endif">
                       <label for="color-field">Color</label>
                    <input type="text" id="color-field" name="color" class="form-control" value="{{ old("color") }}"/>
                       @if($errors->has("color"))
                        <span class="help-block">{{ $errors->first("color") }}</span>
                       @endif
                    </div>

                <a class="btn btn-default" href="{{ route('admin.types.index') }}">Back</a>
                <button class="btn btn-primary" type="submit">Create</button>
            </form>
        </div>
    </div>


@endsection