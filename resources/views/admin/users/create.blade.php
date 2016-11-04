@extends('admin_template')

@section('content')

    <h1 id="hiuser">Create Users</h1>


    {!! Form::open(['method' => 'POST','action'=>'AdminUserController@store','files'=>'true']) !!}


    <div class="form-group">
        {!! form::label('name','Name')!!}
        {!! form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) !!}
    </div>

    <div class="form-group">
        {!! form::label('email','Email')!!}
        {!! form::text('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}
    </div>

    <div class="form-group">
        {!! form::label('role_id','Role')!!}
        {!! form::select('role_id',[''=>'Select One']+$roles,null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! form::label('is_active','Status')!!}
        {!! form::select('is_active',[1=>'online', 0=>'offline'],null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! form::label('pic_id','Add Photo')!!}
        {!! form::file('pic_id',null) !!}
    </div>


    <div class="form-group">
        {!! form::label('password','Password')!!}
        {!! form::password('password',['class'=>'form-control','placeholder'=>'Password']) !!}
    </div>


    <div class="form-group">

        {!! form::submit('Create User',['class'=>"btn btn-primary btn-xs"]) !!}
    </div>

    {!! Form::close() !!}



    @include('include.form_error')
@endsection