@extends('admin_template')

@section('content')

    <h1 id="hiuser">Edit Users</h1>


    <div class="row">
        <div class="col-sm-9">
            {!! Form::model($user,['method' => 'PATCH','action'=>['AdminUserController@update', $user->id],'files'=>'true']) !!}

            <div class="form-group">
                {!! form::label('name','Name')!!}
                {!! form::text('name',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! form::label('email','Email')!!}
                {!! form::text('email',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! form::label('role_id','Role')!!}
                {!! form::select('role_id',$role,null,['class'=>'form-control']) !!}
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
                {!! form::password('password',['class'=>'form-control']) !!}
            </div>


            <div class="form-group">

                {!! form::submit('Create User',['class'=>"btn btn-primary btn-xs"]) !!}
            </div>

            {!! Form::close() !!}

        </div>


        <div class="col-sm-3">
            <img src="{{$user->Pic?$user->Pic->path: "http://placehold.it/400x400"}}" alt="" class="img-responsive img-rounded">
        </div>

    </div>

<div class="row">
    @include('include.form_error')
</div>


@endsection