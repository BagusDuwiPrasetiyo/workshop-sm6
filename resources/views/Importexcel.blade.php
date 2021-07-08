<div class="modal fade" id="import_excel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="excel" method="post" action="{{url('trainingexcel')}}" enctype="multipart/form-data">
                {{@csrf_field()}}
                <div class="modal-body">
                    <div class="form-group">
                        <label>Upload File Excel</label>
                        <div class="custom-file">
                            <input type="file" class="form-control" name="customFile" id="customFile"
                                required>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger close_modal" data-dismiss="modal">BATAL</button>
                <button type="submit" class="btn btn-primary next_section">UPLOAD</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@push('content-js')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.js"></script>
<script>
   

    function excelsubmit() {
        $("#excel").submit();
    }

</script>
@endpush