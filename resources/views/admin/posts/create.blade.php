@extends('layouts/app')
@section('content')
    <div class="container">
        {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store'])!!}
            <div class="form-group">
                {!! Form::label('title','Title')!!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content','Content')!!}
                {!! Form::textarea('content',null,['class'=>'form-control']) !!}
            </div>
            <div>
                {!! Form::submit('Create Post',['class'=>'btn btn-info']) !!}
            </div>
        {!! Form::close()!!}
    </div>
@endsection