@extends('Templates')
@section('content')
@include('Createtraining')
@include('Importexcel')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Training</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Training</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-success tambah" data-toggle="modal" onclick="tambah()"
                        data-target="#tambah_training"><i class="fa fa-plus-circle"></i> Insert Data</button>
                        <button class="btn btn-warning tambah float-right" data-toggle="modal" data-target="#import_excel" onclick="excel()"><i class="fa fa-plus-circle"></i> Import Excel</button>
                </div>
                <div class="card-body">
                    <table id="data" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">L CORE</th>
                                <th scope="col">L SURF</th>
                                <th scope="col">L 02</th>
                                <th scope="col">L BP</th>
                                <th scope="col">SURF STBL</th>
                                <th scope="col">CORE STBL</th>
                                <th scope="col">BP STBL</th>
                                <th scope="col">COMFORT</th>
                                <th scope="col">DECISION ADM DECS</th>
                                <th scope="col" style="width: 10%;">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($patient as $s)
                            <tr>
                                <td>{{$s->l_core}}</td>
                                <td>{{$s->l_surf}}</td>
                                <td>{{$s->l_o2}}</td>
                                <td>{{$s->l_bp}}</td>
                                <td>{{$s->surf_stbl}}</td>
                                <td>{{$s->core_stbl}}</td>
                                <td>{{$s->bp_stbl}}</td>
                                <td>{{$s->comfort}}</td>
                                <td>{{$s->decision_adm_decs}}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-xs edit_data" value="{{$s->id}}"
                                        data-toggle="modal" data-target="#tambah_training" onclick="edit(this.value)"><i
                                            class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-xs" value="{{$s->id}}"
                                        onclick="delet(this.value)"><i class="fa fa-trash-alt"></i></button>
                                    </>
                            </tr>
                            @endforeach
                        </tbody>
                        </tbody>
                    </table>
                </div>

                <!-- /.row -->
            </div>
            <!--/. container-fluid -->
    </section>


</div>
@endsection
@push('content-js')
<script>
    jQuery(document).ready(function ($) {

        $('#data').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });



    });

    function tambah() {
        script_create();
        $('#form_data').trigger('reset').attr('action', "{{route('Training.store')}}");
    }

    function excel() {
        $('#excel').trigger("reset");
    }

    function edit(value) {
        $('#form_data').trigger('reset').attr('action', "{{route('Training.update')}}");
        $.ajax({
            url: `{{url('/training/get_data/` + value + `')}}`,
            type: 'GET',
            dataType: 'JSON',
            success: function (data) {
                console.log(data);
                $('input[name=id_training]').val(data.id);
                $('#l_core option[value=' + data.l_core + ']').attr('selected', true);
                $('#l_surf option[value=' + data.l_surf + ']').attr('selected', true);
                $('#l_o2 option[value=' + data.l_o2 + ']').attr('selected', true);
                $('#l_bp option[value=' + data.l_bp + ']').attr('selected', true);
                $('#surf_stbl option[value=' + data.surf_stbl + ']').attr('selected', true);
                $('#core_stbl option[value=' + data.core_stbl + ']').attr('selected', true);
                $('#bp_stbl option[value=' + data.bp_stbl + ']').attr('selected', true);
                $('#comfort').val(data.comfort);
                $('#decision_adm_decs option[value=' + data.decision_adm_decs + ']').attr('selected', true);
            }
        });
    }

    function delet(value) {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        $.ajax({
            url: `{{url('/training/delete/` + value + `')}}`,
            type: 'GET',
            dataType: 'JSON',
            success: function (data) {
                Toast.fire({
                    icon: 'success',
                    title: 'Berhasil Dihapus'
                });
                setTimeout(function () {
                    window.location.reload();
                }, 750);
            }
        });
    }
</script>
@endpush