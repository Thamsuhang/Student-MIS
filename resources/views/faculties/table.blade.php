<div class="table-responsive">
    <table class="table" id="faculties-table">
        <thead>
            <tr>
                <th>Faculty Name</th>
        <th>Faculty Code</th>
        <th>Faculty Desc</th>
        <th>Faculty Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($faculties as $faculties)
            <tr>
                <td>{{ $faculties->faculty_name }}</td>
            <td>{{ $faculties->faculty_code }}</td>
            <td>{{ $faculties->faculty_desc }}</td>
            <td>{{ $faculties->faculty_status }}</td>
                <td>
                    {!! Form::open(['route' => ['faculties.destroy', $faculties->faculty_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('faculties.show', [$faculties->faculty_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('faculties.edit', [$faculties->faculty_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
