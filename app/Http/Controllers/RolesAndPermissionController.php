<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionController extends Controller
{
    public function index()
    {
        return view('roles-and-permissions.index');
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
}
