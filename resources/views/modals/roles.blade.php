<div class="modal fade" id="rolesModal" tabindex="-1" role="dialog" aria-labelledby="rolesmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rolesmodalLabel">Add Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('roles_and_permissions.store') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" autofocus name="name" placeholder="Enter role name">
                    </div>
                    <input type="hidden" name="type" value="role">
                    <button type="submit" class="btn btn-block btn-primary">Create</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
