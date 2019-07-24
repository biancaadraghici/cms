@extends('layouts/app')

@section('content')


    <div class="container">
        <h3 style="text-align:center;">Users</h3><hr style="width:30%;margin-left:auto;margin-right:auto;">
        <div class="row">
            <div class="col-sm-8" >
                @if(Session::has('user_deleted'))
                    <p class="alert alert-success">{{session('user_deleted')}}</p>
                @endif
                @if((count($users))>0)
                    <table class="table table-hover"  >
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
                                <td>{{$user->first_name.' '.$user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                @if(!is_null($user->created_at) && !is_null($user->updated_at))
                                <td>{{$user->created_at->diffForHumans()}}</td>
                                <td>{{$user->updated_at->diffForHumans()}}</td>
                                @else 
                                <td></td>
                                <td></td>
                                @endif
                                <td>
                                    <a href="{{route('admin-user-edit',$user->id)}}" type="button" class="btn btn-success"><i class="fas fa-user-edit"></i></a>
                                    <a href="{{route('delete-user', $user->id)}}" type="button" class="btn btn-danger"><i class="fas fa-user-minus"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                 <!-- Pagination -->
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-5">
                            {{$users->render()}}
                        </div>
                    </div>
            </div>
            <div class="col-sm-4">
                <p>charts</p>
            </div>
        </div>
    </div>
@endsection