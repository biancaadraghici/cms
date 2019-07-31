@extends('layouts/app')

@section('content')

    <div class="container">
        {!! Form::open(['method'=>'POST','action'=>'AdminMembersController@store','files'=>true])!!}
            <div class="form-group">
                {!! Form::label('first_name','First Name')!!}
                {!! Form::text('first_name',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('last_name','Last Name')!!}
                {!! Form::text('last_name',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role','Role')!!}
                {!! Form::text('role',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id','Photo') !!}
                {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description','Description')!!}
                {!! Form::textarea('description',null,['class'=>'form-control']) !!}
            </div>
            <div>
                {!! Form::submit('Create Member',['class'=>'btn btn-info']) !!}
            </div>
        {!! Form::close()!!}
        @include('includes/form_required_fields_error') 
    </div>
@endsection

{{-- <h4><b>Add Social-Media Buttons</b></h4>
                <div class="row">
                    <div class="col-md-6">
                        {!! Form::open(['method'=>'POST','action'=>'AdminMembersController@storeButton']) !!}
                        <div class="form-group">
                            {!! Form::label('app_name','App')!!}
                            {!! Form::text('app_name',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('link','Link')!!}
                            {!! Form::text('link',null,['class'=>'form-control']) !!}
                        </div>
                            {!! Form::submit('Create Button',['class'=>'btn btn-info']) !!}
                        {!! Form::close() !!}
                    </div>
                    <div class="col-md-6">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align:center;">App</th>
                                    <th scope="col" style="text-align:center;">Link</th>
                                </tr>
                            </thead>
                            <tbody style="text-align:center;">
                                @foreach($socialmedias as $socialmedia)
                                    <tr>
                                        <td>{{$socialmedia->app_name}}</td>
                                        <td>{{$socialmedia->link}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <h4><b>Add Events To Timeline</b></h4>
                <div class="row">
                    <div class="col-md-6">
                        {!! Form::open(['method'=>'POST','action'=>'AdminMembersController@storeEvent']) !!}
                        <div class="form-group">
                            {!! Form::label('event_title','Event Title')!!}
                            {!! Form::text('event_title',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('event_content','Event Content')!!}
                            {!! Form::text('event_content',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('year','Event Year')!!}
                            {!! Form::text('year',null,['class'=>'form-control']) !!}
                        </div>
                            {!! Form::submit('Create Event',['class'=>'btn btn-info']) !!}
                        {!! Form::close() !!}
                    </div>
                    <div class="col-md-6">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" style="text-align:center;">Event Title</th>
                                    <th scope="col" style="text-align:center;">Event Content</th>
                                    <th scope="col" style="text-align:center;">Event Year</th>
                                </tr>
                            </thead>
                            <tbody style="text-align:center;">
                                @foreach($events as $event)
                                    <tr>
                                        <td>{{$event->event_title}}</td>
                                        <td>{{$event->event_content}}</td>
                                        <td>{{$event->year}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> --}}