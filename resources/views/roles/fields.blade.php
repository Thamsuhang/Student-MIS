<!-- Name Field -->
<div class="modal fade left" id="roleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="roleModal"><i class="fa fa-registered">Roles</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>



            </div>

                <div class="modal-footer">
                    <!-- Submit Field -->

                        {!! Form::submit('Create Role', ['class' => 'btn btn-primary']) !!}
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

                </div>
        </div>
    </div>
</div>


