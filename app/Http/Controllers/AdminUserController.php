<?php

namespace App\Http\Controllers;

use App\Http\Requests\Usereditrequest;
use App\Http\Requests\UsersRequest;
use App\Pic;
use App\role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::lists('name','id')->all();

        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //
        if($request->password=='')
        {
            $input = $request->except('password');
        }
        else
        {
            $input = $request->all();
        }

        //$input = $request->all();

        if($file = $request->file('pic_id'))
        {
            $name = time().$file->getClientOriginalName();
            $file->move('images',$name);

            $pic = Pic::create(['path'=>$name]);
            $input['pic_id'] = $pic->id;
        }

        $input['password'] = bcrypt($request->Password);

        User::create($input);
        return redirect('admin/users');

        /*User::create($request->all());

        return redirect('admin/users');*/
        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $user = User::findOrfail($id);

        return view('admin.users.pic', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $user = User::findOrfail($id);
        $role = Role::lists('name','id')->all();

        return view('admin.users.edit',compact('user','role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Usereditrequest $request, $id)
    {
        //

        if($request->password=='')
        {
            $input = $request->except('password');
        }
        else
        {
            $input = $request->all();
        }

        $user = User::findOrfail($id);
        //$input = $request->all();

        if($file = $request->file('pic_id'))
        {
            $name = time().$file->getClientOriginalName();
            $file->move('images',$name);

            $pic = Pic::create(['path'=>$name]);
            $input['pic_id'] = $pic->id;
        }
        $input['password'] = bcrypt($request->Password);

        $user->update($input);
        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function loadimages()
    {
        //
        $users = User::all();

        return view('admin.users.pic', compact('users'));
    }
}
