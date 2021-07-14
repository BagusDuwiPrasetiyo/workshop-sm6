@extends('Templates')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-- Content Wrapper. Contains page content -->
    <!-- Main content -->
    <section class="content">
   
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-table"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">DATA TRAINING</span>
                            <span class="info-box-number">
                                {{$patient}}
                                <small>Data</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box mb-2">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-database"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">STORED TEST DATA</span>
                            <span class="info-box-number">{{$history}}
                                <small>Data</small>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-6">
                    <!-- <div class="card-body"> -->
                    <div class="callout callout-info">
                        <h5>Algoritma Naive Bayyes</h5>
                        <p>Algoritma Naive Bayes memprediksi peluang di masa depan berdasarkan pengalaman di masa
                            sebelumnya sehingga dikenal sebagai Teorema Bayes. Naive Bayes Classifier bekerja sangat
                            baik dibanding dengan model classifier lainnya. Hal ini dibuktikan pada jurnal Xhemali,
                            Daniela, Chris J. Hinde, and Roger G. Stone. “Naive Bayes vs. decision trees vs. neural
                            networks in the classification of training web pages.” (2009), mengatakan bahwa “Naïve Bayes
                            Classifier memiliki tingkat akurasi yg lebih baik dibanding model classifier
                            lainnya”.Keuntungan penggunaan metode ini adalah bahwa metode ini hanya membutuhkan jumlah
                            data pelatihan (training data) yang kecil untuk menentukan estimasi parameter yg diperlukan
                            dalam proses pengklasifikasian. </p>
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-md-6">
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <i class="fas fa-globe"></i> Algorithm Naive Bayyes.
                                </h4>
                            </div>
                            <!-- /.col -->
                        </div>
                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>data</th>
                                            <th>explanation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>L-Core</td>
                                            <td>Data suhu tubuh dalam pasien diukur menggunakan satuan celcius.</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>L_SURF</td>
                                            <td>Data suhu tubuh luar pasien diukur menggunakan satuan celcius.</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>L-02</td>
                                            <td>Data penyerapan oksigen dalam persentase.</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>L-BP</td>
                                            <td>ata tekanan darah terakhir.</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>SURF-STBL</td>
                                            <td>data stabilitas suhu tubuh luar pasien.</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>CORE-STBL</td>
                                            <td>data stabilitas suhu tubuh dalam pasien.</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>BP-STBL</td>
                                            <td>stabilitas tekanan darah pasien.</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>COMFORT</td>
                                            <td>tingkat kenyamanan pasien ketika pulang.</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>decision ADM-DECS</td>
                                            <td>jika S pasien siap pulang dan jika A maka pasien akan dikirim ke kamar
                                                umum.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>



    </section>
</div>
<!-- /.content-wrapper -->

@endsection
