@extends('layouts/app')

@section('content')

    <div class="container">
            <h3 style="text-align:center;">Team Members</h3><hr style="width:30%;margin-left:auto;margin-right:auto;">
            <div class="row">
                <div class="col-sm-8" >
                    @if(Session::has('member_deleted'))
                        <p class="alert alert-success">{{session('member_deleted')}}</p>
                    @elseif(Session::has('member_edited'))
                        <p class="alert alert-success">{{session('member_edited')}}</p>
                    @elseif(Session::has('member_created'))
                        <p class="alert alert-success">{{session('member_created')}}</p>
                    @endif
                    @if((count($members))>0)
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                        <th scope="col" style="text-align:center;">ID</th>
                                        <th scope="col" style="text-align:center;">Profile Pic</th>
                                        <th scope="col" style="text-align:center;">Full Name</th>
                                        <th scope="col" style="text-align:center;">Role</th>
                                        <th scope="col" style="text-align:center;">Description</th>
                                        <th scope="col" style="text-align:center;">Created</th>
                                        <th scope="col" style="text-align:center;">Updated</th>
                                        <th scope="col" style="text-align:center;">Actions</th>
                                </tr>
                            </thead>
                            <tbody style="text-align:center;">
                                @foreach($members as $member)
                                <tr>
                                        <td>{{$member->id}}</td>
                                    @if(($member->photo_id)!=null)
                                        @php
                                        $profilepic=$member->photo->path;
                                        @endphp
                                        <td><img style="border-radius:50%;width:40px;height:40px;" class="img-fluid"  src="{{asset('images/'.$profilepic)}}"></td>
                                        @else 
                                        <td><img style="border-radius:50%;width:40px;height:40px;" class="img-fluid" src="https://api.adorable.io/avatars/285/abott@adorable.png"></td>
                                    @endif
                                        <td>{{$member->first_name.' '.$member->last_name}}</td>
                                        <td>{{$member->role}}</td>
                                        <td>{{str_limit($member->description,80)}}</td>
                                    @if(!is_null($member->created_at))
                                        <td>{{$member->created_at->diffForHumans()}}</td>
                                    @else 
                                        <td></td>
                                    @endif
                                    @if(!is_null($member->updated_at))
                                        <td>{{$member->updated_at->diffForHumans()}}</td>
                                    @else 
                                        <td></td>
                                    @endif
                                        <td>
                                            <a href="{{route('admin-member-edit',$member->id)}}" type="button" class="btn btn-success"><i class="fas fa-user-edit"></i></a>
                                            <a href="{{route('admin-member-delete', $member->id)}}" type="button" class="btn btn-danger"><i class="fas fa-user-minus"></i></a>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                     {{-- <!-- Pagination -->
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-5">
                                {{$members->render()}}
                            </div>
                        </div> --}}
                </div>
                <div class="col-sm-4">
                    <a href="{{route('admin-member-create')}}">Create Member</a>
                </div>
            </div>


@endsection