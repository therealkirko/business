<x-app-layout>
    <div class="container-fluid">
        <div class="row page-title align-items-center">
            <div class="col-sm-4 col-xl-6">
                <h4 class="mb-1 mt-0">Dashboard</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right">
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#rolesModal">Add</button>
                        </div>
                        @include('modals.roles')
                        <h5>Roles</h5>
                        @livewire('roles-and-permissions.role')
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right">
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#permissionsModal">Add</button>
                        </div>
                        @include('modals.permissions')
                        <h5>Permission</h5>
                        @livewire('roles-and-permissions.permission')
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="float-right">
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#assignModal">Assign</button>
                        </div>
                        @include('modals.assign_permissions_to_roles')
                        <h4>Roles With Permissions</h4>
                        @livewire('roles-and-permissions.role-with-permission')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
