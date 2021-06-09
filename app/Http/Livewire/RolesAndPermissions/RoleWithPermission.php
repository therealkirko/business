<?php

namespace App\Http\Livewire\RolesAndPermissions;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class RoleWithPermission extends Component
{
    public function render()
    {
        return view('livewire.roles-and-permissions.role-with-permission');
    }
}
