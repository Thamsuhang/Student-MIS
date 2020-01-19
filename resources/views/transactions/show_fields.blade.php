<!-- Student Id Field -->
<div class="form-group">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $transactions->student_id }}</p>
</div>

<!-- Fee Id Field -->
<div class="form-group">
    {!! Form::label('fee_id', 'Fee Id:') !!}
    <p>{{ $transactions->fee_id }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $transactions->user_id }}</p>
</div>

<!-- Paid Field -->
<div class="form-group">
    {!! Form::label('paid', 'Paid:') !!}
    <p>{{ $transactions->paid }}</p>
</div>

<!-- Transaction Date Field -->
<div class="form-group">
    {!! Form::label('transaction_date', 'Transaction Date:') !!}
    <p>{{ $transactions->transaction_date }}</p>
</div>

<!-- Remark Field -->
<div class="form-group">
    {!! Form::label('remark', 'Remark:') !!}
    <p>{{ $transactions->remark }}</p>
</div>

<!-- Trans Desc Field -->
<div class="form-group">
    {!! Form::label('trans_desc', 'Trans Desc:') !!}
    <p>{{ $transactions->trans_desc }}</p>
</div>

