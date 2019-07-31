@extends('layouts/app')

@section('content')
    
    <div class="container">
        {!! Form::open(['method'=>'PATCH','action'=>['AdminMembersController@update',$member->id],'files'=>true])!!}
            <div class="form-group">
                {!! Form::label('first_name','First Name')!!}
                {!! Form::text('first_name',old('first_name',$member->first_name),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('last_name','Last Name')!!}
                {!! Form::text('last_name',old('last_name',$member->last_name),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role','Role')!!}
                {!! Form::text('role',old('role',$member->role),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id','Photo') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description','Description')!!}
                {!! Form::textarea('description',old('description',$member->description),['class'=>'form-control']) !!}
            </div>
            <div>
                {!! Form::submit('Update Member',['class'=>'btn btn-info']) !!}
            </div>
        {!! Form::close()!!}
        @include('includes/form_required_fields_error') 
    </div>


@endsection