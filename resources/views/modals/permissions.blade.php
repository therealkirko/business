<div class="modal fade" id="permissionsModal" tabindex="-1" role="dialog" aria-labelledby="permissionsModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rolesmodalLabel">Add Permission</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('roles_and_permissions.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" autofocus name="name" placeholder="Enter permission name">
                    </div>
                    <input type="hidden" name="type" value="permission">
                    <button class="btn btn-block btn-primary" type="submit">Create</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
