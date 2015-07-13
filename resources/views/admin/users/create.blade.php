@extends('admin.layout')

@section('content')
    <div class="page-header">
        <h1>Users / Create </h1>
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

            <form action="{{ route('admin.users.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('name')) has-error @endif">
                       <label for="name-field">Name</label>
                    <input type="text" id="name-field" name="name" class="form-control" value="{{ old("name") }}"/>
                       @if($errors->has("name"))
                        <span class="help-block">{{ $errors->first("name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('email')) has-error @endif">
                       <label for="email-field">Email</label>
                    <input type="text" id="email-field" name="email" class="form-control" value="{{ old("email") }}"/>
                       @if($errors->has("email"))
                        <span class="help-block">{{ $errors->first("email") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('password')) has-error @endif">
                       <label for="password-field">Password</label>
                    <input type="text" id="password-field" name="password" class="form-control" value="{{ old("password") }}"/>
                       @if($errors->has("password"))
                        <span class="help-block">{{ $errors->first("password") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('role')) has-error @endif">
                       <label for="role-field">Role</label>
                    <input type="text" id="role-field" name="role" class="form-control" value="{{ old("role") }}"/>
                       @if($errors->has("role"))
                        <span class="help-block">{{ $errors->first("role") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('image')) has-error @endif">
                       <label for="image-field">Image</label>
                    <input type="text" id="image-field" name="image" class="form-control" value="{{ old("image") }}"/>
                       @if($errors->has("image"))
                        <span class="help-block">{{ $errors->first("image") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('remember_tolken')) has-error @endif">
                       <label for="remember_tolken-field">Remember_tolken</label>
                    <input type="text" id="remember_tolken-field" name="remember_tolken" class="form-control" value="{{ old("remember_tolken") }}"/>
                       @if($errors->has("remember_tolken"))
                        <span class="help-block">{{ $errors->first("remember_tolken") }}</span>
                       @endif
                    </div>

                <a class="btn btn-default" href="{{ route('admin.users.index') }}">Back</a>
                <button class="btn btn-primary" type="submit">Create</button>
            </form>
        </div>
    </div>


@endsection