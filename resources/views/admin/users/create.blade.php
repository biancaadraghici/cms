@extends('layouts/app')

@section('content')
<div class="container">
    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store']) !!}

        <div class="form-group">
            {!! Form::label('first_name','First Name') !!}
            {!! Form::text('first_name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('last_name','Last Name') !!}
            {!! Form::text('last_name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email','E-mail') !!}
            {!! Form::text('email',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id','Role') !!}
            {!! Form::select('role_id',[''=>'Choose Options'] + $roles,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active','Status') !!}
            {!! Form::select('is_active',array('0'=>'Inactive','1'=>'Active'),0,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!!Form::label('password','Password:')!!}
            {!!Form::password('password', ['class'=>'form-control'])!!}
        </div>
        <div>
            {!! Form::submit('Save',['class'=>'btn btn-success']) !!}
        </div>
    {!! Form::close() !!}  
</div>  
@if(count($errors)>0)

    <div class="alert alert-danger">
        <ul>

            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

            @endforeach

        </ul>
    </div>
    
@endif
@endsection