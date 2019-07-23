@extends('layouts/app')

@section('content')


    <div class="container">
        @if(Session::has('user_deleted'))
            <p class="alert alert-success">{{session('user_deleted')}}</p>
        @endif
        @if((count($users))>0)
            <table class="table table-hover" >
                <thead>
                    <tr>
                        <th scope="col" style="text-align:center;">ID</th>
                        <th scope="col" style="text-align:center;">Full Name</th>
                        <th scope="col" style="text-align:center;">E-mail</th>
                        <th scope="col" style="text-align:center;">Created</th>
                        <th scope="col" style="text-align:center;">Updated</th>
                        <th scope="col" style="text-align:center;">Actions</th>
                    </tr>
                </thead>
                <tbody style="text-align:center;">
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
                        <td>
                            <a href="{{url('admin/users/edit')}}" type="button" class="btn btn-success"><i class="fas fa-user-edit"></i></a>
                            <a href="{{url('admin/users/delete')}}" type="button" class="btn btn-danger"><i class="fas fa-user-minus"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection