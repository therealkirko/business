@push('page-styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
<div class="modal fade" id="assignModal" tabindex="-1" role="dialog" aria-labelledby="assignModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rolesmodalLabel">Assign Permissions to Roles</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <form action="{{ route('roles_and_permissions.assign') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="roles">Role</label>
                            <select class="form-control" name="role">
                                <option label="Choose Role"></option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="permissions">Permissions</label>
                            <select class="form-control permission_options" name="permissions[]" multiple>
                                <option label="Choose Permissions"></option>
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-block btn-primary" type="submit">Assign</button>
                    </form>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@push('page-scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.permission_options').select2({
                placeholder: {
                    id: '-1',
                    text: 'Select Permissions'
                }
            });
        });
    </script>
@endpush
