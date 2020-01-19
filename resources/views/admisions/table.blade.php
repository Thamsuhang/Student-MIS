<div class="table-responsive">
    <table class="table" id="admisions-table">
        <thead>
            <tr>
                <th>Roll No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Father Name</th>
        <th>Mother Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Dob</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Current Address</th>
        <th>Nationality</th>
        <th>Passport</th>
        <th>Status</th>
        <th>Date Registered</th>
        <th>User Id</th>
        <th>Class Id</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($admisions as $admisions)
            <tr>
                <td>{{ $admisions->roll_no }}</td>
            <td>{{ $admisions->first_name }}</td>
            <td>{{ $admisions->last_name }}</td>
            <td>{{ $admisions->father_name }}</td>
            <td>{{ $admisions->mother_name }}</td>
            <td>{{ $admisions->gender }}</td>
            <td>{{ $admisions->email }}</td>
            <td>{{ $admisions->DOB }}</td>
            <td>{{ $admisions->Phone }}</td>
            <td>{{ $admisions->address }}</td>
            <td>{{ $admisions->current_address }}</td>
            <td>{{ $admisions->nationality }}</td>
            <td>{{ $admisions->passport }}</td>
            <td>{{ $admisions->status }}</td>
            <td>{{ $admisions->Date_registered }}</td>
            <td>{{ $admisions->user_id }}</td>
            <td>{{ $admisions->class_id }}</td>
            <td>{{ $admisions->image }}</td>
                <td>
                    {!! Form::open(['route' => ['admisions.destroy', $admisions->admission_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admisions.show', [$admisions->admission_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admisions.edit', [$admisions->admission_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
