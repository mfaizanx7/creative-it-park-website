<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions =Permission::all();
        return view('admin.permissions.index',['permissions'=>$permissions]);
    }
    public function create()
    {
        return view('admin.permissions.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate(['name'=> 'required']);
        Permission::create($validated);
        return to_route('admin.permissions.index');
    }
    public function edit($id)
    {
        $permission = Permission::findById($id);
        $roles = Role::all();
        return view('admin.permissions.edit',['permission'=>$permission , 'roles' =>$roles]);
    }
    public function update(Request $request, Permission $permission)
    {
        $validated = $request->validate(['name'=> 'required']);
        $permission->update($validated);
        return to_route('admin.permissions.index');
    }
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->back();
    }
    public function assignRole(Request $request,Permission $permission)
    {
        // if($permission->hasRole($request->role));{
        //     return back();
        // }
        $permission->assignRole($request->role);
        return redirect()->back();
    }
    public function removeRole(Permission $permission,Role $role)
    {
        if($permission->hasRole($role))
        {
            $permission->removeRole($role);
            return redirect()->back();
        }
        return back();
    }
}
