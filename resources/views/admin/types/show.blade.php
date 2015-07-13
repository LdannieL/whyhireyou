@extends('admin.layout')

@section('content')
    <div class="page-header">
        <h1>Types / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$type->id}}</p>
                </div>
                <div class="form-group">
                     <label for="name">NAME</label>
                     <p class="form-control-static">{{$type->name}}</p>
                </div>
                    <div class="form-group">
                     <label for="color">COLOR</label>
                     <p class="form-control-static">{{$type->color}}</p>
                </div>
            </form>

            <div class="btn-group">
            <a class="btn btn-default" href="{{ route('admin.types.index') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('admin.types.edit', $type->id) }}">Edit</a>
            <form action="#/$type->id" method="DELETE" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </div>
        </div>
    </div>


@endsection