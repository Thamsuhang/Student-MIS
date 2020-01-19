<div class="modal fade left" id="batchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="batchModal"><i class="fa fa-registered">Batches</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"><!-- Batch Field -->
                <div class="input-group col-md-12">
                    <span class="input-group-addon">Batch Year</span>
                    {!! Form::text('batch', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Submit Field -->

                <div class="modal-footer">


                    {!! Form::submit('Create Batch', ['class' => 'btn btn-primary']) !!}
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>


                </div>
            </div>
        </div>
    </div>
</div>

