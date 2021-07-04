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
                <input type="hidden" name="id_training">
                <div class="modal-body">
                    <div class="section_1">
                        <div class="form-group">
                            <label>L CORE</label>
                            <select name="l_core" id="l_core" class="form-control select2" required
                                style="width: 100%;">
                                <option value="">--Choose--</option>
                                <option value="high">HIGH > 37</option>
                                <option value="mid">MID <= 37 and >= 36</option>
                                <option value="low">LOW < 36</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>L SURF</label>
                            <select name="l_surf" id="l_surf" class="form-control select2" required
                                style="width: 100%;">
                                <option value="">--Choose--</option>
                                <option value="high">HIGH > 36.5 </option>
                                <option value="mid">MID <= 36.5 and >= 35 </option>
                                <option value="low">LOW < 35</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>L 02</label>
                            <select name="l_o2" id="l_o2" class="form-control select2" required style="width: 100%;">
                                <option value="">--Choose--</option>
                                <option value="excellent">EXCELLENT >= 98%</option>
                                <option value="good">GOOD >= 90% and < 98%</option>
                                <option value="fair">FAIR >= 80% and < 90%</option>   
                                <option value="poor">POOR < 80%</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>L BP</label>
                            <select name="l_bp" id="l_bp" class="form-control select2" required style="width: 100%;">
                                <option value="">--Choose--</option>
                                <option value="high">HIGH > 130/90</option>
                                <option value="mid">MID <= 130/90 and >= 90/70</option>
                                <option value="low">LOW < 90/70</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>SURF STBL</label>
                            <select name="surf_stbl" id="surf_stbl" class="form-control select2" required style="width: 100%;">
                                <option value="">--Choose--</option>
                                <option value="stable">STABLE</option>
                                <option value="mod-stable">MOD-STABLE</option>
                                <option value="unstable">UNSTABLE</option>
                            </select>
                        </div>
                    </div>
                    <div class="section_2" hidden="true">
                        <div class="form-group">
                            <label>CORE STBL</label>
                            <select name="core_stbl" id="core_stbl" class="form-control select2" required style="width: 100%;">
                                <option value="">--Choose--</option>
                                <option value="stable">STABLE</option>
                                <option value="mod-stable">MOD-STABLE</option>
                                <option value="unstable">UNSTABLE</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>BP STBL</label>
                            <select name="bp_stbl" id="bp_stbl" class="form-control select2" required style="width: 100%;">
                                <option value="">--Choose--</option>
                                <option value="stable">STABLE</option>
                                <option value="mod-stable">MOD-STABLE</option>
                                <option value="unstable">UNSTABLE</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>COMFORT</label>
                            <input type="number" name="comfort" id="comfort" value="1" class="form-control" required min="1" max="20">
                        </div>
                        <div class="form-group">
                            <label>DECISION ADM DESC</label>
                            <select name="decision_adm_decs" id="decision_adm_decs" class="form-control select2" style="width: 100%;" required>
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

        var addSection = function() {

            if (show) {
                show = false;

                $('.section_2').hide('slow', function() {
                    $(this).attr('hidden', true);
                });
                $('.back_section').remove();
                $('.next_section').before(
                    '<button type="button" class="btn btn-danger close_modal" data-dismiss="modal" >BATAL</button>'
                );
                $('.next_section').removeClass('btn-success simpan').addClass('btn-primary').text('LANJUT')
                    .attr('type', 'button').attr('onclick', 'script_create.addSection()');

                $('.section_1').attr('hidden', false);
                $('.section_1').show('slow');

            } else {
                if ($('#form_data').valid()) {
                    $('.section_1').hide('slow', function() {
                        $(this).attr('hidden', true);
                    });
                    $('.close_modal').remove();
                    $('.next_section').before(
                        '<button type="button" class="btn btn-warning back_section" onclick="script_create.addSection()">KEMBALI</button>'
                    );
                    $('.next_section').removeClass('btn-primary').addClass('btn-success simpan').text('SIMPAN')
                        .attr('onclick', 'script_create.simpan()');

                    $('.section_2').attr('hidden', false);
                    $('.section_2').show('slow');
                    show = true;
                }
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
            if ($('#form_data').valid()) {
                $.ajax({
                    url: $('#form_data').attr('action'),
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

            }
        }

        $('#form_data').on('submit', function(e) {
            e.preventDefault();
        });

        $('#form_data').validate({
            messages: {
                l_core: 'l core harus diChoose',
                l_surf: 'l surf harus diChoose',
                l_o2: 'l o2 harus diChoose',
                l_bp: 'l bp harus diChoose',
                surf_stbl: 'surf stbl harus diChoose',
                core_stbl: 'core stbl harus diChoose',
                bp_stbl: 'bp stbl harus diChoose',
                comfort: 'comfort harus diisi',
                decision_adm_decs: 'decision adm decs harus diChoose',
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

        script_create.addSection = addSection;
        script_create.simpan = simpan;
    }
    script_create();
</script>
@endpush