@extends('layouts/app')

@section('content')


    <div class="container">
        <h3 style="text-align:center;">Users</h3><hr style="width:30%;margin-left:auto;margin-right:auto;">
        <div class="row">
            <div class="col-sm-8" >
                @if(Session::has('user_deleted'))
                    <p class="alert alert-success">{{session('user_deleted')}}</p>
                @elseif(Session::has('user_edited'))
                    <p class="alert alert-success">{{session('user_edited')}}</p>
                @elseif(Session::has('user_created'))
                    <p class="alert alert-success">{{session('user_created')}}</p>
                @endif
                @if((count($users))>0)
                    <table class="table table-hover"  >
                        <thead>
                            <tr>
                                    <th scope="col" style="text-align:center;">ID</th>
                                    <th scope="col" style="text-align:center;">Avatar</th>
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
                                @if(($user->photo_id)!=null)
                                    @php
                                    $avatar=$user->photo->path;
                                    @endphp
                                    <td><img style="border-radius:50%;width:40px;height:40px;" class="img-fluid"  src="{{asset('images/'.$avatar)}}"></td>
                                    @else 
                                    <td>User has no avatar</td>
                                @endif
                                    <td>{{$user->first_name.' '.$user->last_name}}</td>
                                    <td>{{$user->email}}</td>
                                @if(!is_null($user->created_at))
                                    <td>{{$user->created_at->diffForHumans()}}</td>
                                @else 
                                    <td></td>
                                @endif
                                @if(!is_null($user->updated_at))
                                    <td>{{$user->updated_at->diffForHumans()}}</td>
                                @else 
                                    <td></td>
                                @endif
                                    <td>
                                        <a href="{{route('admin-user-edit',$user->id)}}" type="button" class="btn btn-success"><i class="fas fa-user-edit"></i></a>
                                        <a href="{{route('admin-user-delete', $user->id)}}" type="button" class="btn btn-danger"><i class="fas fa-user-minus"></i></a>
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
                <a href="{{route('admin-user-create')}}">Create User</a>
            </div>
        </div>
    </div>
@endsection