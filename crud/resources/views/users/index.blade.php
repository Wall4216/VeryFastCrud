@extends('layouts.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Fast Crud</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="{{route('users.create')}}">Create User</a>
            </div>
        </div>
    </div>

    @if($soob = \Illuminate\Support\Facades\Session::get('success'))

        <div class="alert alert-success">
            <p>{{$soob}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Description</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
