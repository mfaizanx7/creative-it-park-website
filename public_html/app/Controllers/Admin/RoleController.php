<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles =Role::whereNotIn('name', ['admin'])->get();
        return view('admin.roles.index',['roles' =>$roles]);
    }
    public function create()
    {
        return view('admin.roles.create');
    }
    public function store(Request $request)
    {
        $validated =$request->validate(['name' => ['required','min:3']]);
        Role::create($validated);
        return to_route('admin.roles.index');
    }
    public function edit($id)
    {
        $role = Role::findById($id);
        $permissions = Permission::all();
        return view('admin.roles.edit',['role'=>$role, 'permissions'=>$permissions]);
    }
    public function update(Request $request, Role $role)
    {
        $validated = $request->validate(['name'=>'required']);
        $role->update($validated);
        return to_route('admin.roles.index');
    }
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->back();
    }
    public function givePermission(Request $request, Role $role)
    {
        // if($role->hasPermissionTo($request->permission));
        // {
        //     return back();
        // }
        $role->givePermissionTo($request->permission);
        // dd($role);
        return back();
    }
    public function revokePermission(Role $role,Permission $permission)
    {
        if($role->hasPermissionTo($permission)){
            $role->revokePermissionTo($permission);
            return redirect()->back();
        }
        return back();
    }
}
