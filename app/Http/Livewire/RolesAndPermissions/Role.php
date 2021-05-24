<?php

namespace App\Http\Livewire\RolesAndPermissions;

use Livewire\Component;
use Spatie\Permission\Models\Role as RoleModel;

class Role extends Component
{
    public $roles = [];

    public function render()
    {
        $this->roles = RoleModel::get();
        return view('livewire.roles-and-permissions.role');
    }
}
