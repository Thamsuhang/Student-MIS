<div class="table-responsive">
    <table class="table" id="classSchedulings-table">
        <thead>
            <tr>
                <th>Course Id</th>
        <th>Level Id</th>
        <th>Shift Id</th>
        <th>Classroom Id</th>
        <th>Batch Id</th>
        <th>Day Id</th>
        <th>Time Id</th>
        <th>Teacher Id</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classSchedulings as $classSchedulings)
            <tr>
                <td>{{ $classSchedulings->course_id }}</td>
            <td>{{ $classSchedulings->level_id }}</td>
            <td>{{ $classSchedulings->shift_id }}</td>
            <td>{{ $classSchedulings->classroom_id }}</td>
            <td>{{ $classSchedulings->batch_id }}</td>
            <td>{{ $classSchedulings->day_id }}</td>
            <td>{{ $classSchedulings->time_id }}</td>
            <td>{{ $classSchedulings->teacher_id }}</td>
            <td>{{ $classSchedulings->start_time }}</td>
            <td>{{ $classSchedulings->end_time }}</td>
            <td>{{ $classSchedulings->status }}</td>
                <td>
                    {!! Form::open(['route' => ['classSchedulings.destroy', $classSchedulings->class_schedule_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classSchedulings.show', [$classSchedulings->class_schedule_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('classSchedulings.edit', [$classSchedulings->class_schedule_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
