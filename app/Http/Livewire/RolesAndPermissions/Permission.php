<?php

namespace App\Http\Livewire\RolesAndPermissions;

use Livewire\Component;
use Spatie\Permission\Models\Permission as PermissionModel;
class Permission extends Component
{
    public $permissions = [];

    public function render()
    {
        $this->permissions = PermissionModel::get();
        return view('livewire.roles-and-permissions.permission');
    }
}
