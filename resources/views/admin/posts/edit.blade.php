@extends('layouts/app')
@section('content')
<div class="container">
    {!! Form::open(['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files'=>true])!!}
        <div class="form-group">
            {!! Form::label('title','Title')!!}
            {!! Form::text('title',old('title',$post->title),['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content','Content')!!}
            {!! Form::textarea('content',old('content',$post->content),['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id','Photo') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>
        <div>
            {!! Form::submit('Update Post',['class'=>'btn btn-info']) !!}
        </div>
    {!! Form::close()!!}
</div>
@endsection