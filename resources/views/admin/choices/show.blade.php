@extends('app')

@section('content')
    <div class="page-header">
        <h1>Choices / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$choice->id}}</p>
                </div>
                <div class="form-group">
                     <label for="statement_id">STATEMENT_ID</label>
                     <p class="form-control-static">{{$choice->statement_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="statement_number">PROFILE_ID</label>
                     <p class="form-control-static">{{$choice->profile_id}}</p>
                </div>
                    <div class="form-group">
                     <label for="text">TEXT</label>
                     <p class="form-control-static">{{$choice->text}}</p>
                </div>
{{--                     <div class="form-group">
                     <label for="profile">PROFILE</label>
                     <p class="form-control-static">{{$choice->profile}}</p>
                </div> --}}
                    <div class="form-group">
                     <label for="value">VALUE</label>
                     <p class="form-control-static">{{$choice->value}}</p>
                </div>
            </form>

            <div class="btn-group">
            <a class="btn btn-default" href="{{ route('admin.choices.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.choices.edit', $choice->id) }}">Edit</a>
            <form action="#/$choice->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </div>
        </div>
    </div>


@endsection