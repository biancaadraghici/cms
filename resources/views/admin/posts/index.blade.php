@extends('layouts/app')

@section('content')
    <div class="container">
        <h1 class="text-center display-1">My Posts</h1>
        <hr style="width:40%;">
        @if(count($posts)>0)
            @foreach($posts as $post)
                <div>
                    {{$post->title}}
                        @if(($post->photo_id)!=null)
                            @php
                            $image=$post->photo->path ;
                            @endphp
                            <div><img height="100" src="{{asset('images/'.$image)}}"></div>
                        @endif
                    <a href="{{route('admin-post-edit',$post->id)}}" class="btn btn-info">Edit</a>
                    <a href="{{route('admin-post-delete',$post->id)}}" class="btn btn-info">delete</a>
                </div>
            @endforeach
        @else 
            There are no posts
        @endif
    </div>
@endsection