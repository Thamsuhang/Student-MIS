<div class="table-responsive">
    <table class="table" id="roles-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $roles)
            <tr>
                <td>{{ $roles->name }}</td>
                <td class="pull">
                    {!! Form::open(['route' => ['roles.destroy', $roles->role_id], 'method' => 'delete']) !!}
                    <div class='btn-group btn-group-sm'>
                        <a href="{{ route('roles.show', [$roles->role_id]) }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-eye-open"> View</i> </a>
                    </div>
                    <div class='btn-group btn-group-sm'>
                        <a href="{{ route('roles.edit', [$roles->role_id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-edit"> Edit</i></a>
                    </div>
                        <div class='btn-group btn-group-sm'>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"> Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
