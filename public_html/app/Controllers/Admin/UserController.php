<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Models\FortnightlyResult;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User;
        $fortnightlyresult = new FortnightlyResult;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->contact = $request->phone_no;
        if ($users->save()) {
            return redirect()->route('admin.user.index')->with('message', 'Created Successfully');
        } else {
            return redirect()->route('admin.user.index')->with('message', 'Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user =User::findOrFail($id);
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.users.role',['user'=>$user , 'roles'=>$roles, 'permissions'=>$permissions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit',['user' =>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->contact = $request->phone_no;
        if($users->save()){
            return redirect()->route('admin.user.index')->with('message','Edit Successfully!');
        }
        else
        {
            return redirect()->route('admin.user.index')->with('message','Failed!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.user.index');
    }

    public function assignRole(Request $request, User $user)
    {
        // if($permission->hasRole($request->role));{
        //     return back();
        // }
        $user->assignRole($request->role);
        return redirect()->back();
    }
    public function removeRole( User $user,Role $role)
    {
        if($user->hasRole($role))
        {
            $user->removeRole($role);
            return redirect()->back();
        }
        return back();
    }

    public function givePermission(Request $request, User $user)
    {
        // if($role->hasPermissionTo($request->permission));
        // {
        //     return back();
        // }
        $user->givePermissionTo($request->permission);
        // dd($role);
        return back();
    }
    public function revokePermission(User $user,Permission $permission)
    {
        if($user->hasPermissionTo($permission)){
            $user->revokePermissionTo($permission);
            return redirect()->back();
        }
        return back();
    }
}
