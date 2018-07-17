<script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/snap.js"></script>
<!-- <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="VT-client-sEUMOUkcshhIM1jm"></script>
-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap2.css">
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/jstools.js" type="text/javascript"></script>

<style type="text/css">
    .stepwizard-step p {
        margin-top: 10px;
    }

    .stepwizard-row {
        display: table-row;
    }

    .stepwizard {
        display: table;
        width: 100%;
        position: relative;
    }

    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }

    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;

    }

    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }

    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }
    .harus_diisi{
        color:red;
        font-weight:bold;
    }
    /***
    Bootstrap Line Tabs by @keenthemes
    A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
    Licensed under MIT
    ***/

    /* Tabs panel */
    .tabbable-panel {
        border:1px solid #eee;
        padding: 10px;
    }

    /* Default mode */
    .tabbable-line > .nav-tabs {
        border: none;
        margin: 0px;
    }
    .tabbable-line > .nav-tabs > li {
        margin-right: 2px;
    }
    .tabbable-line > .nav-tabs > li > a {
        border: 0;
        margin-right: 0;
        color: #737373;
    }
    .tabbable-line > .nav-tabs > li > a > i {
        color: #a6a6a6;
    }
    .tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
        border-bottom: 4px solid #fbcdcf;
    }
    .tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
        border: 0;
        background: none !important;
        color: #333333;
    }
    .tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
        color: #a6a6a6;
    }
    .tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
        margin-top: 0px;
    }
    .tabbable-line > .nav-tabs > li.active {
        border-bottom: 4px solid #f3565d;
        position: relative;
    }
    .tabbable-line > .nav-tabs > li.active > a {
        border: 0;
        color: #333333;
    }
    .tabbable-line > .nav-tabs > li.active > a > i {
        color: #404040;
    }
    .tabbable-line > .tab-content {
        margin-top: -3px;
        background-color: #fff;
        border: 0;
        border-top: 1px solid #eee;
        padding: 15px 0;
    }
    .portlet .tabbable-line > .tab-content {
        padding-bottom: 0;
    }

    /* Below tabs mode */

    .tabbable-line.tabs-below > .nav-tabs > li {
        border-top: 4px solid transparent;
    }
    .tabbable-line.tabs-below > .nav-tabs > li > a {
        margin-top: 0;
    }
    .tabbable-line.tabs-below > .nav-tabs > li:hover {
        border-bottom: 0;
        border-top: 4px solid #fbcdcf;
    }
    .tabbable-line.tabs-below > .nav-tabs > li.active {
        margin-bottom: -2px;
        border-bottom: 0;
        border-top: 4px solid #f3565d;
    }
    .tabbable-line.tabs-below > .tab-content {
        margin-top: -10px;
        border-top: 0;
        border-bottom: 1px solid #eee;
        padding-bottom: 15px;
    }
    input:focus{
        background-color:#7AFFCA !important;
    }
</style>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/dropzone.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/dropzone.css" />
</head>

<body>
    <div class="container" style="margin-bottom: 60px;" >
        <div class="col-md-12 col-sm-12" style="background-color: white; padding-top: 10px;">

            <div class="stepwizard" style="margin-bottom: 20px;">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-default btn-circle" disabled="disabled">1</a>
                        <p>Step 1</p>  
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>Step 2</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Step 3</p>
                    </div>
                    <div class="stepwizard-step">
                        <!--  disabled="disabled" //-->
                        <a href="#step-4" type="button" class="btn btn-primary btn-circle" disabled="disabled" >4</a>
                        <p>Step 4</p>
                    </div>
                                    </div>
            </div>

            <form role="form" method="post" action="<?php echo base_url();?>index.php/daftar/simpan " id="form_submit" enctype="multipart/form-data">
                <input type="hidden" name="skema_yang_dipilih" id="skema_yang_dipilih" />
                <div class="row setup-content" id="step-1">
                     
        <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pendaftaran Berhasil</h1>
                </div>
                <!-- /.col-lg-6 -->
            </div>
<div class="panel panel-default col-lg-12">
                        <div class="panel-heading ">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Data Dr
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                            <hr>
                            <table width="100%" border="0" class="table">
                              <tbody>
                                <tr>
                                  <td width="25%">No Formulir</td>
                                  <td width="1%">:</td>
                                  <td width="74%"><?php echo $formulir['no_form']; ?></td>
                                </tr>
                                <tr>
                                  <td>Username </td>
                                  <td>:</td>
                                  <td><?php echo $formulir['username']; ?></td>
                                </tr>
                                <tr>
                                  <td>Password</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['password']; ?></td>
                                </tr>
                                <tr>
                                  <td>Tgl Daftar</td>
                                  <td>:</td>
                                  <td><?php echo date('d-m-Y',  strtotime($formulir['tgl_daftar'])); ?></td>
                                </tr>
                                <tr>
                                  <td>Promo Expired</td>
                                  <td>:</td>
                                  <td><?php
                                  $exp=  substr($formulir['tgl_daftar'],0,4)+1;
                                  $exp1=substr($formulir['tgl_daftar'],8,2)."-".substr($formulir['tgl_daftar'],5,2)."-".$exp;
                                  echo $exp1; ?></td>
                                </tr>
                                <tr>
                                  <td>No Identitas</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['no_id']; ?></td>
                                </tr>
                                <tr>
                                  <td>Nama Lengkap</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['nm_lngkp']; ?></td>
                                </tr>
                                <tr>
                                  <td>Berat Badan</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['organisasi']; ?></td>
                                </tr>
                                <tr>
                                  <td>Pernah periksa Sebelumnya?</td>
                                  <td>:</td>
                                  <td><?php 
                                  if($formulir['pernah']=='1')
                                  {
                                      echo "Pernah";
                                  }
                                  else {
                                      echo ""; 
                                  }?></td>
                                </tr>
                                <tr>
                                  <td>Tempat Tanggal Lahir</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['tempat_lhr']; ?></td>
                                </tr>
                                <tr>
                                  <td>Jenis Kelamin</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['jk']; ?></td>
                                </tr>
                                <tr>
                                  <td>Alamat</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['alamat']; ?></td>
                                </tr>
                                <tr>
                                  <td>No HP</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['no_hp']; ?></td>
                                </tr>
                                <tr>
                                  <td>Email</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['email']; ?></td>
                                </tr>
                                <tr>
                                  <td>Tinggi Badan</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['pendidikan']; ?></td>
                                </tr>
                                <tr>
                                  <td>Asal</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['nm_pddk']; ?></td>
                                </tr>
                                <tr>
                                  <td>Pekerjaan</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['jurusan']; ?></td>
                                </tr>
                                <tr>
                                  <td>Gol Darah</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['nm_lokasi']; ?></td>
                                </tr>
                                <tr>
                                  <td>Dr Yang Dipilih</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['nm_kursus']; ?></td>
                                </tr>
                              </tbody>
                            </table
                           
                            <div class="panel-heading"> <i class="fa fa-bar-chart-o fa-fw"></i>Data Spesifikasi Dr
                            </div><p>&nbsp;</p>
                            <table border="1" class="table table-striped table-bordered table-hover " id="dataTables-example">
    <thead>
    <tr>
        <td width="10">No</td>
        <td>Kode Unit</td>
        <td>Judul Unit </td>
       
    </tr>
    </thead>
    <tbody>
        
         <?php 
    $no=1;
    $record=$this->model_kursus->tampil_detail($formulir['kd_kursus']);
    foreach ($record->result() as $r)
    {
        
        echo "<tr>
        <td>$no</td>  
        <td>$r->kd_unit</td>
        <td>$r->nm_unit</td>
        </tr>";?>
                
        <?php
        $no++;        
    }        
        ?>
   
    </tbody>
   
    
</table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
        