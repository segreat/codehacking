@extends('admin_template')

@section('content')


<div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="image-container">
            <img height="" width="" src="{{$user->Pic?$user->Pic->path: "http://placehold.it/400x400"}}" alt="" class="img-responsive img-rounded">
        </div>
    </div>
    <div class="col-sm-3"></div>

@endsection                                                                                                                                                       