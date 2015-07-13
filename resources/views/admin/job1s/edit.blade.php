@extends('admin.layout')

@section('content')
    <div class="page-header">
        <h1>Job1s / Edit </h1>
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

            <form action="{{ route('admin.job1s.update', $job1->id) }}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$job1->id}}</p>
                </div>

                <div class="form-group @if($errors->has('category_id')) has-error @endif">
                       <label for="category_id-field">Category</label>
{{--                     <input type="text" id="category_id-field" name="category_id" class="form-control" value="{{ $job1->category_id }}"/> --}}
                    <select id="category_id-field" name="category_id" class="form-control" value="{{ $job1->category_id }}"/>
                    <option> {{ $job1->category->name }}  </option>
                          @foreach($categories as $category)
                           {{--  <option>{{ $job1s->category->name }}</option> --}}
                            <option>{{ $category->name }}</option>
                          @endforeach
                      </select>
                       @if($errors->has("category_id"))
                        <span class="help-block">{{ $errors->first("category_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('user_id')) has-error @endif">
                       <label for="user_id-field">User</label>
 {{--                    <input type="text" id="user_id-field" name="user_id" class="form-control" value="{{ $job1->user_id }}"/> --}}
                    <select id="user_id-field" name="user_id" class="form-control" value="{{ $job1->user->name }}"/>
                    <option> {{ $job1->user->name }} </option>
                          @foreach($users as $user)
                           {{--  <option>{{ $job1s->category->name }}</option> --}}
                            <option>{{ $user->name }}</option>
                          @endforeach
                      </select>
                       @if($errors->has("user_id"))
                        <span class="help-block">{{ $errors->first("user_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('type_id')) has-error @endif">
                       <label for="type_id-field">Type</label>
{{--                     <input type="text" id="type_id-field" name="type_id" class="form-control" value="{{ $job1->type_id }}"/> --}}
                    <select id="type_id-field" name="type_id" class="form-control" value="{{ $job1->type_id }}"/>
                    <option> {{ $job1->type->name }}  </option>
                          @foreach($types as $type)
                           {{--  <option>{{ $job1s->category->name }}</option> --}}
                            <option>{{ $type->name }}</option>
                          @endforeach
                      </select>
                       @if($errors->has("type_id"))
                        <span class="help-block">{{ $errors->first("type_id") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('company_name')) has-error @endif">
                       <label for="company_name-field">Company_name</label>
                    <input type="text" id="company_name-field" name="company_name" class="form-control" value="{{ $job1->company_name }}"/>
                       @if($errors->has("company_name"))
                        <span class="help-block">{{ $errors->first("company_name") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('title')) has-error @endif">
                       <label for="title-field">Title</label>
                    <input type="text" id="title-field" name="title" class="form-control" value="{{ $job1->title }}"/>
                       @if($errors->has("title"))
                        <span class="help-block">{{ $errors->first("title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('description')) has-error @endif">
                       <label for="description-field">Description</label>
                    <textarea class="form-control" id="description-field" rows="3" name="description">{{ $job1->description }}</textarea>
                    <script>CKEDITOR.replace( 'description-field' );</script>
                       @if($errors->has("description"))
                        <span class="help-block">{{ $errors->first("description") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('city')) has-error @endif">
                       <label for="city-field">City</label>
                    <input type="text" id="city-field" name="city" class="form-control" value="{{ $job1->city }}"/>
                       @if($errors->has("city"))
                        <span class="help-block">{{ $errors->first("city") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('state')) has-error @endif">
                       <label for="state-field">State</label>
                    <input type="text" id="state-field" name="state" class="form-control" value="{{ $job1->state }}"/>
                       @if($errors->has("state"))
                        <span class="help-block">{{ $errors->first("state") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('contact_email')) has-error @endif">
                       <label for="contact_email-field">Contact_email</label>
                    <input type="text" id="contact_email-field" name="contact_email" class="form-control" value="{{ $job1->contact_email }}"/>
                       @if($errors->has("contact_email"))
                        <span class="help-block">{{ $errors->first("contact_email") }}</span>
                       @endif
                    </div>

                <a class="btn btn-default" href="{{ route('admin.job1s.index') }}">Back</a>
                <button class="btn btn-primary" type="submit" >Save</button>
            </form>
        </div>
    </div>


@endsection