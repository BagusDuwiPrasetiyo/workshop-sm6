@extends('Templates')
@section('content')
@include('Createtraining')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Testing</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Testing</li>
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
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>L CORE</label>
                                <select name="l_core" id="l_core" class="form-control select2" required
                                    style="width: 100%;">
                                    <option value="">--Pilih--</option>
                                    <option value="high">HIGH</option>
                                    <option value="mid">MID</option>
                                    <option value="low">LOW</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>L SURF</label>
                                <select name="l_surf" id="l_surf" class="form-control select2" required
                                    style="width: 100%;">
                                    <option value="">--Pilih--</option>
                                    <option value="high">HIGH</option>
                                    <option value="mid">MID</option>
                                    <option value="low">LOW</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>L 02</label>
                                <select name="l_o2" id="l_o2" class="form-control select2" required
                                    style="width: 100%;">
                                    <option value="">--Pilih--</option>
                                    <option value="excellent">EXCELLENT</option>
                                    <option value="good">GOOD</option>
                                    <option value="fair">FAIR</option>
                                    <option value="poor">POOR</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>L BP</label>
                                <select name="l_bp" id="l_bp" class="form-control select2" required
                                    style="width: 100%;">
                                    <option value="">--Pilih--</option>
                                    <option value="high">HIGH</option>
                                    <option value="mid">MID</option>
                                    <option value="low">LOW</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>SURF STBL</label>
                                <select name="surf_stbl" id="surf_stbl" class="form-control select2" required
                                    style="width: 100%;">
                                    <option value="">--Pilih--</option>
                                    <option value="stable">STABLE</option>
                                    <option value="mod-stable">MOD-STABLE</option>
                                    <option value="unstable">UNSTABLE</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CORE STBL</label>
                                <select name="core_stbl" id="core_stbl" class="form-control select2" required
                                    style="width: 100%;">
                                    <option value="">--Pilih--</option>
                                    <option value="stable">STABLE</option>
                                    <option value="mod-stable">MOD-STABLE</option>
                                    <option value="unstable">UNSTABLE</option>
                                </select>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <label>BP STBL</label>
                                <select name="bp_stbl" id="bp_stbl" class="form-control select2" required
                                    style="width: 100%;">
                                    <option value="">--Pilih--</option>
                                    <option value="stable">STABLE</option>
                                    <option value="mod-stable">MOD-STABLE</option>
                                    <option value="unstable">UNSTABLE</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>COMFORT</label>
                                <input type="number" name="comfort" id="comfort" value="1" class="form-control" required
                                    min="1" max="20">
                            </div>
                            <div class="form-group">
                                <label>DECISION ADM DESC</label>
                                <select name="decision_adm_decs" id="decision_adm_decs" class="form-control select2"
                                    style="width: 100%;" required>
                                    <option selected="selected">A</option>
                                    <option>S</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-success float-right">Proses</button>
                </div>
                <!-- /.row -->
            </div>
            <!--/. container-fluid -->
    </section>


</div>
@endsection
@push('content-js')
<script>
</script>
@endpush