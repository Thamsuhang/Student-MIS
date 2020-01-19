<div class="table-responsive">
    <table class="table" id="classRooms-table">
        <thead>
            <tr>
                <th>Classroom Name</th>
        <th>Classroom Code</th>
        <th>Classroom Description</th>
        <th>Classroom Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classRooms as $classRoom)
            <tr>
                <td>{{ $classRoom->classroom_name }}</td>
            <td>{{ $classRoom->classroom_code }}</td>
            <td>{{ $classRoom->classroom_description }}</td>
            <td>{{ $classRoom->classroom_status }}</td>
                <td>
                    {!! Form::open(['route' => ['classRooms.destroy', $classRoom->classroom_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classRooms.show', [$classRoom->classroom_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('classRooms.edit', [$classRoom->classroom_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
