<div class="modal fade" id="tambah_training">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_data" method="post">
                {{@csrf_field()}}
                <div class="modal-body">
                    <div class="section_1">
                        <div class="form-group">
                            <label>L CORE</label>
                            <select name="l_core" id="l_core" class="form-control select2" style="width: 100%;">
                                <option selected="selected">HIGH</option>
                                <option>MID</option>
                                <option>LOW</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>L SURF</label>
                            <select name="l_surf" id="l_surf" class="form-control select2" style="width: 100%;">
                                <option selected="selected">HIGH</option>
                                <option>MID</option>
                                <option>LOW</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>L 02</label>
                            <select name="l_o2" id="l_o2" class="form-control select2" style="width: 100%;">
                                <option selected="selected">HIGH</option>
                                <option>MID</option>
                                <option>LOW</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>L BP</label>
                            <select name="l_bp" id="l_bp" class="form-control select2" style="width: 100%;">
                                <option selected="selected">HIGH</option>
                                <option>MID</option>
                                <option>LOW</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>SURF STBL</label>
                            <select name="surf_stbl" id="surf_stbl" class="form-control select2" style="width: 100%;">
                                <option selected="selected">STABLE</option>
                                <option>MOD STABLE</option>
                                <option>UNSTABLE</option>
                            </select>
                        </div>
                    </div>
                    <div class="section_2" hidden="true">
                        <div class="form-group">
                            <label>CORE STBL</label>
                            <select name="core_stbl" id="core_stbl" class="form-control select2" style="width: 100%;">
                                <option selected="selected">HIGH</option>
                                <option>MID</option>
                                <option>LOW</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>BP STBL</label>
                            <select name="bp_stbl" id="bp_stbl" class="form-control select2" style="width: 100%;">
                                <option selected="selected">HIGH</option>
                                <option>MID</option>
                                <option>LOW</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>COMFORT</label>
                            <input type="number" name="comfort" id="comfort" value="1" class="form-control" min="1" max="30">
                        </div>
                        <div class="form-group">
                            <label>DECISION ADM DESC</label>
                            <select name="decision_adm_decs" id="decision_adm_decs" class="form-control select2" style="width: 100%;">
                                <option selected="selected">A</option>
                                <option>S</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger close_modal" data-dismiss="modal">BATAL</button>
                <button type="button" class="btn btn-primary next_section" onclick="script_create.addSection()">LANJUT</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@push('content-js')
<script>
    $('#comfort').on('keyup', function() {
        var regex = /^[0-9]+$/;
        if (regex.test(this.value) !== true) {
            this.value = this.value.replace(/[^0-9]+/, '');
        } else {
            $('.comfort').text('');
        }
    });

    $('#comfort').on('keyup', function() {
        var max = parseInt($(this).attr('max'));
        var min = parseInt($(this).attr('min'));
        if ($(this).val() > max) {
            $(this).val(max);
        } else if ($(this).val() < min) {
            $(this).val(min);
        }
    });

    $('#decision_adm_decs').on('keyup', function() {
        var regex = /^[a / s A / S]+$/;
        if (regex.test(this.value) !== true) {
            this.value = this.value.replace(/[^a-sA-S]+/, '');
        } else {
            $('.decision_adm_decs').text('');
        }
    });
    var regex = /^[a-z A-Z]+$/;

    var script_create = function() {

        let show = false;

        var check = true;

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        var addSection = function() {

            if (show) {
                show = false;

                $('.section_2').hide('slow', function() {
                    $(this).attr('hidden', true);
                });
                $('.back_section').remove();
                $('.next_section').before('<button type="button" class="btn btn-danger close_modal" data-dismiss="modal" >BATAL</button>');
                $('.next_section').removeClass('btn-success simpan').addClass('btn-primary').text('LANJUT').attr('type', 'button').attr('onclick', 'script_create.addSection()');

                $('.section_1').attr('hidden', false);
                $('.section_1').show('slow');

            } else {
                $('.section_1').hide('slow', function() {
                    $(this).attr('hidden', true);
                });
                $('.close_modal').remove();
                $('.next_section').before('<button type="button" class="btn btn-warning back_section" onclick="script_create.addSection()">KEMBALI</button>');
                $('.next_section').removeClass('btn-primary').addClass('btn-success simpan').text('SIMPAN').attr('onclick', 'script_create.simpan()');

                $('.section_2').attr('hidden', false);
                $('.section_2').show('slow');
                show = true;
            }

        }

        function simpan() {
            // let formMethod;

            // if ($('input[name=id_user]').val() == 'false') {
            //     formMethod = 'POST';
            // }else{
            //     formMethod = 'PUT';
            // }
            //     $('#form_data').ajaxForm({
            //     success: function (data) {
            //       console.log(data);
            //     }
            //   });
            // console.log($('#form_data').serialize());    
            // if ($('#form_data').valid()) {
            $.ajax({
                url: "{{url('training/')}}",
                type: $('#form_data').attr('method'),
                data: $('#form_data').serialize(),
                success: function(data) {
                    if (data == 'success') {
                        Toast.fire({
                            icon: 'success',
                            title: 'Berhasil Disimpan'
                        });
                        setTimeout(function() {
                            $('#tambah_training').modal('toggle');
                            window.location.reload();
                        }, 750);
                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: 'Gagal Disimpan'
                        });
                    }
                }
            });

            // }
        }

        script_create.addSection = addSection;
        script_create.simpan = simpan;
    }
    script_create();
</script>
@endpush