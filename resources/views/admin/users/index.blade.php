@extends('admin_template')

@section('content')

    <h1 id="hiuser">Users</h1>

    <div class="container">
        <h2>ADMIN</h2>

        @if(Session::has('deleted_user'))
        <h1 class="bg-danger">{{session('deleted_user')}}</h1>

        @endif


        <p>List of all Login Users:</p>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
            </thead>


            <tbody>

            @if($users)
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>
                            <a href="{{route('admin.users.show',$user->id)}}">
                                <img height="40" width="50" src="{{$user->Pic ? $user->pic->path: 'no photo'}}" alt="no image" class="roundit">
                            </a>
                        </td>
                        <td>
                            <a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a>
                        </td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->name}}</td>
                        <td>{{$user->is_active == 1 ?"online" : "offline"}}</td>
                        <td>{{$user->created_at->toFormattedDateString()}}</td>
                        <td>{{$user->updated_at->diffforHumans()}}</td>
                    </tr>

                @endforeach

            @endif
            </tbody>
        </table>
    </div>
@endsection

