<!-- Batch id Field -->
<div class="form-group">
    {!! Form::label('batch_id', 'batch_id:') !!}
    <p>{{ $batches->batch_id }}</p>
</div>
<!-- Batch Field -->
<div class="form-group">
    {!! Form::label('batch', 'Batch:') !!}
    <p>{{ $batches->batch }}</p>
</div>
<!-- Batch created at Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $batches->created_at }}</p>
</div>
<!-- Batch updated at Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $batches->updated_at }}</p>
</div>

