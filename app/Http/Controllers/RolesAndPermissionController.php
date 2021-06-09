<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionController extends Controller
{
    public function index()
    {
        $roles = Role::get();
        $permissions =Permission::get();

        return view('roles-and-permissions.index', compact('roles', 'permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required'
        ]);

        if($request->type == 'role')
            Role::create([
                'name' => $request->name
            ]);
        elseif($request->type == 'permission')
            Permission::create([
                'name' => $request->name
            ]);

        return redirect()->route('roles_and_permissions');
    }

    public function assign(Request $request)
    {
        $request->validate([
            'role' => 'required',
            'permissions' => 'required|array'
        ]);

        $role = Role::find($request->role);
        $role->syncPermissions($request->permissions);

        return redirect()->route('roles_and_permissions');
    }
}
