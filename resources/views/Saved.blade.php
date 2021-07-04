@extends('Templates')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Stored Test Data</h1>
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
                                <th scope="col">RESULT A</th>
                                <th scope="col">RESULT S</th>
                                <th scope="col">RESULT</th>
                                <th scope="col" style="width: 10%;">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($saved as $s)
                            <tr>
                                <td>{{$s->l_core}}</td>
                                <td>{{$s->l_surf}}</td>
                                <td>{{$s->l_o2}}</td>
                                <td>{{$s->l_bp}}</td>
                                <td>{{$s->surf_stbl}}</td>
                                <td>{{$s->core_stbl}}</td>
                                <td>{{$s->bp_stbl}}</td>
                                <td>{{$s->comfort}}</td>
                                <td>{{$s->result_a}}</td>
                                <td>{{$s->result_s}}</td>
                                <td>{{$s->result}}</td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-xs" value="{{$s->id}}" onclick="deleteData(this.value)"><i class="fa fa-trash-alt"></i></button>
                                </td>
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
    jQuery(document).ready(function($) {

        $('#data').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });



    });

    function deleteData(value) {
        $.ajax({
            url: `{{url('/stored_data/delete/` + value + `')}}`,
            type: 'GET',
            success: function(data) {
                if (data == 'success') {
                    Toast.fire({
                        icon: 'success',
                        title: 'Berhasil Disimpan'
                    });
                    setTimeout(function() {
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
</script>
@endpush