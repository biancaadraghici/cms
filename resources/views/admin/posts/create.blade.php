@extends('layouts/app')
@section('content')
    <div class="container">
        {!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true])!!}
            <div class="form-group">
                {!! Form::label('title','Title')!!}
                {!! Form::text('title',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content','Content')!!}
                {!! Form::textarea('content',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id','Photo') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            </div>
            <div>
                {!! Form::submit('Create Post',['class'=>'btn btn-info']) !!}
            </div>
        {!! Form::close()!!}
        @include('includes/form_required_fields_error') 
    </div>
@endsection