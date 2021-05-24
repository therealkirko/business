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
                        <h4>Roles With Permissions</h4>
                        <div class="table-responsive mt-4">
                            <table class="table table-hover table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Role</th>
                                        <th scope="col">Permissions</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Admin</td>
                                        <td>
                                            <span class="badge badge-soft-secondary py-1">Create User </span>,
                                            <span class="badge badge-soft-secondary py-1">Edit User </span>,
                                            <span class="badge badge-soft-secondary py-1">Delete User </span>,
                                            <span class="badge badge-soft-secondary py-1">View User </span>
                                        </td>
                                        <td>
                                            <div class="dropdown align-self-center float-center">
                                                <a href="#" class="dropdown-toggle arrow-none text-muted" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i class="uil uil-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">
                                                        <i class="uil uil-edit-alt mr-2"></i>Edit
                                                    </a>
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger">
                                                        <i class="uil uil-trash mr-2"></i>Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
