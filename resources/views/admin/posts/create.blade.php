@extends('admin_template')

@section('content')

    <h1>Create Posts</h1>

    {!! Form::open(['method' => 'POST','action'=>'AdminPostsController@store']) !!}


    <div class="form-group">
        {!! form::label('title','Title')!!}
        {!! form::text('title',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! form::label('category_id','Category')!!}
        {!! form::select('category_id',array('1'=>'PHP',2=>'JAVA'),null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! form::label('pic_id','Picture')!!}
        {!! form::file('pic_id',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! form::label('body',"What's on your mind")!!}
        {!! form::textarea('body',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! form::submit('Create Post',['class'=>"btn btn-primary btn-xs"]) !!}
    </div>



    {!! Form::close() !!}


@endsection