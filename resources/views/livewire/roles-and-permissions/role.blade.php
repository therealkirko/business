<div class="table-responsive mt-4">
    <table class="table table-hover table-nowrap mb-0">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td>{{ Str::lower($role->name) }}</td>
                    <td><span class="badge badge-soft-success py-1">Active</span></td>
                    <td>
                        <button class="btn" style="color: red"><i class="uil uil-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

