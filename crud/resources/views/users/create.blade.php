@extends('layouts.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="{{route('users.create')}}">Create User</a>
            </div>
        </div>
    </div>

@if ($errors->any)
        <div class="alert alert-success">
            @foreach($errors->all() as $error)
            <p>{{$error}}</p>
            @endforeach
        </div>
    @endif

<form action="{{route('users.store')}}" method="post">
@csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Username:</strong>
                <textarea class="form-control" style="height:150px" name="username" placeholder="username"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <textarea class="form-control" style="height:150px" name="password"  placeholder="password"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <textarea class="form-control" style="height:150px" name="email"  placeholder="email"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Нажми!</button>
        </div>
    </div>
</form>
@endsection
