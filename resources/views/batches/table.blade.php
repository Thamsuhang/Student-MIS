<style>
    input:read-only{
        border: none;

    }

</style>

<div class="table-responsive">
    <table class="table" id="batches-table">
        <thead>
            <tr>
                <th>Batch Year</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($batches as $batches)
            <tr>
                <td>{{ $batches->batch }}</td>
                <td>
                    {!! Form::open(['route' => ['batches.destroy', $batches->batch_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!--batch view using below script-->
                        <a data-toggle="modal" data-target="#batch-viewModal" data-batch_id="{{$batches->batch_id}}"
                           data-batch="{{$batches->batch}}"
                           data-created_at="{{$batches->created_at}}"
                           data-updated_at="{{$batches->updated_at}}"
                           class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i>
                        </a>
                        <!-----uptill here-->
                        <a href="{{ route('batches.edit', [$batches->batch_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!--View batch with modal -->
<div class="modal fade left" id="batch-viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="batch-viewModal"><i class="fa fa-registered"></i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"><!-- Batch Field -->
                <input type="hidden" name="batch_id" id="batch_id">


                        <!-- Batch Field -->
                        <div class="form-group">
                            {!! Form::label('batch', 'Batch:') !!}
                            <input type="text" id="batch" name="batch" readonly>
                        </div>
                        <!-- Batch created at Field -->
                        <div class="form-group">
                            {!! Form::label('created_at', 'Created At:') !!}
                            <input type="text" id="created_at" name="created_at" readonly>
                        </div>
                        <!-- Batch updated at Field -->
                        <div class="form-group">
                            {!! Form::label('updated_at', 'Updated At:') !!}
                            <input type="text" id="updated_at" name="updated_at" readonly>
                        </div>



                <!-- Submit Field -->

                <div class="modal-footer">


                    <a href="{{ route('batches.edit', [$batches->batch_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>


                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        $('#batch-viewModal').on('show.bs.modal', function (event) {


        var button = $(event.relatedTarget);// Button that triggered the modal
        var batch =button.data('batch');
        var created_at =button.data('created_at');
        var updated_at =button.data('updated_at');
        var batch_id =button.data('batch_id');


        var modal = $(this);
        modal.find('.modal-title').text('View Level information');
        modal.find('.modal-body #batch').val(batch);
        modal.find('.modal-body #created_at').val(created_at);
        modal.find('.modal-body #updated_at').val(updated_at);
        modal.find('.modal-body #batch_id').val(batch_id);
    });
    </script>


@endsection


