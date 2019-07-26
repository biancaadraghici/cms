@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Posts</h1>
        <hr>
        @if(count($posts)>0)
            @foreach($posts as $post)
                <div class="col-md-4" style="margin-left:auto;margin-right:auto;">
					<div class="single-blog">
						<div>
							
							{{-- <a>By <b>{{$post->author}}</b></a> --}}
							<span style="text-align:right;">{{ $post->created_at }}</span>
						
						</div>
						<div>
							<img style="width:50%" src="{{ asset('images/' . $post->photo->path) }}" />
						</div>
						<div>
							<b>
								{{ $post->title }}
							</b>
							<p>{!!str_limit($post->content,118)!!}</p>
						</div>
						
						<button type="button" class="btn btn-sm btn-outline-dark">Read More</button>
					</div>
				</div>
            @endforeach
        @endif
    </div>
@endsection