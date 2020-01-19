<div class="table-responsive">
    <table class="table" id="courses-table">
        <thead>
            <tr>
                <th>Course Name</th>
        <th>Course Code</th>
        <th>Course Desc</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courses as $courses)
            <tr>
                <td>{{ $courses->course_name }}</td>
            <td>{{ $courses->course_code }}</td>
            <td>{{ $courses->course_desc }}</td>
            <td>

                     @if( $courses->status = 0 )
                    <button class="btn btn-danger"><i class="fa fa-times"></i> </button>
                    @else
                    <button class="btn btn-success"><i class="fa fa-check"></i> </button>
                    @endif

            </td>
                <td>
                    {!! Form::open(['route' => ['courses.destroy', $courses->course_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courses.show', [$courses->course_id]) }}" class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-eye-open"> View</i> </a>
                    </div>
                    <div class='btn-group'>
                        <a href="{{ route('courses.edit', [$courses->course_id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-edit"> Edit</i> </a>
                    </div>
                        <div class='btn-group'>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"> Delete</i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
