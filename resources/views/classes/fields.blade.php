<div class="modal fade left" id="classModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="classModal"><i class="fa fa-registered">Classes</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Class Name Field -->
<div class="input-group col-md-12">
    <span class="input-group-addon">Class Name</span>
    {!! Form::text('class_name', null, ['class' => 'form-control']) !!}
</div>
                <br>

<!-- Class Code Field -->
<div class="input-group col-sm-12">
    <span class="input-group-addon">Class Code</span>
    {!! Form::text('class_code', null, ['class' => 'form-control']) !!}
</div>

                <div class="modal-footer">


                    {!! Form::submit('Create Class', ['class' => 'btn btn-primary']) !!}
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>


                </div>
            </div>
        </div>
    </div>
</div>

