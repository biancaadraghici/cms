@extends('layouts/app')

@section('content')
<div class="container">
    {!! Form::open(['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('first_name','First Name') !!}
            {!! Form::text('first_name',old('name',$user->first_name),['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('last_name','Last Name') !!}
            {!! Form::text('last_name',old('last_name',$user->last_name),['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','E-mail') !!}
            {!! Form::text('email',old('email',$user->email),['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id','Role') !!}
            {!! Form::select('role_id',$roles,old('role_id',$user->role_id),['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active','Status') !!}
            {!! Form::select('is_active',array('0'=>'Inactive','1'=>'Active'),old('is_active',$user->is_active),['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id','Photo') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
        </div>
        <div>
            {!! Form::submit('Save',['class'=>'btn btn-success']) !!}
        </div>
    {!! Form::close() !!}

        @include('includes/form_required_fields_error')
</div>  

@endsection
