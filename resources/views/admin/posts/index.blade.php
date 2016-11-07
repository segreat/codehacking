@extends('admin_template')

@section('content')

<h1>Posts</h1>

<div class="container">
    <h2>Striped Rows</h2>

    <p>The .table-striped class adds zebra-stripes to a table:</p>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>S/N</th>
            <th>Picture</th>
            <th>User</th>
            <th>category_id</th>
            <th>title</th>
            <th>body</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        </thead>
        <tbody>


        @if($posts)

            @foreach($posts as $post)
        <tr>
            <td>{{$post->id }}</td>

            <td><img height="50px" src="{{$post->Pic ? $post->Pic->path :""}}" alt=""></td>

            <td>{{$post->user->name}}</td>

            <td>{{$post->category_id}}</td>

            <td>{{$post->title}}</td>

            <td>{{$post->body}}</td>

            <td>{{$post->created_at->diffforHumans()}}</td>

            <td>{{$post->updated_at}}</td>
        </tr>
        @endforeach
      @endif
        </tbody>
    </table>
</div>


@endsection