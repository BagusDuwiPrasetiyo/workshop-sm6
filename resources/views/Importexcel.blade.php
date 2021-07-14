<div class="modal fade" id="import_excel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="overlay" hidden>
                <i class="fas fa-2x fa-sync fa-spin"></i>
            </div>
            <div class="modal-header">
                <h4 class="modal-title">Import Excel</h4>
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
                            <input type="file" class="form-control custom-file-input" name="customFile" id="customFile"
                                required>
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger close_modal" data-dismiss="modal">BATAL</button>
                <button type="button" class="btn btn-primary next_section" onclick="excelsubmit()">UPLOAD</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="example_excel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Example Excel</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="invoice">
                    <div class="row">
                        <div class="col-12">
                            <img class="img-fluid" alt="photo" src="{{asset('template')}}/Screenshot_11.png">
                        </div>
                        <!-- /.col -->
                    </div>

                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@push('content-js')
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.js"></script> -->
<script>
    $(function () {
        bsCustomFileInput.init();
    });

    function excelsubmit() {
        
        

        $('#excel').validate({
            messages: {
                customFile: 'File Excel harus diChoose'
            },
            highlight: function(e) {
                $(e).closest('.form-control').addClass('is-invalid');
            },
            unhighlight: function(e) {
                $(e).closest('.form-control').removeClass('is-invalid');
                $(e).closest('.form-control').addClass('is-valid');
            },
            success: function(e) {
                $(e).closest('.form-control').removeClass('is-invalid');
                $(e).closest('.form-control').addClass('is-valid');
            },
        });
        if ($('#excel').valid()) {
            // console.log(submit);
            // let submit = false;
        var allowedFiles = [".xls", ".xlsx"];
        var fileUpload = document.getElementById("customFile");
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (!regex.test(fileUpload.value.toLowerCase())) {
        Toast.fire({
                icon: 'error',
                title: ' please check excel file type (xls / xlsx)'
            });
            // submit = false;
        } else {
        $('.overlay').attr('hidden', false);
        $("#excel").submit();
        
        }
            
        }

    }
</script>
@endpush