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
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
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
                        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                        <p>Step 4</p>
                    </div>
                    
                                    </div>
            </div>

            <form role="form" method="post" action="<?php echo base_url();?>index.php/daftar/simpan " id="form_submit" enctype="multipart/form-data">
                <input type="hidden" name="skema_yang_dipilih" id="skema_yang_dipilih" />
                <div class="row setup-content" id="step-1">
                     
        <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
         <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/jquery.v2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        
        
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap1.min.css">
       
        
        <style>
    @import url('https://fonts.googleapis.com/css?family=Anton');
    body {
        background: #FFFFFF;/*#29AB87;*/
        /*background-image: url("http://www.chrislanejones.com/wp-content/uploads/2017/03/bigstock-Beautiful-Waterfall-On-Guadelo-114611036.jpg");*/
    }

    h1 {
        font-family: 'Anton', sans-serif;
        color: #29AB87;
    }

    .input-group {
        margin-top: 20px;
        margin-bottom: 10px;
    }

    .panel {
        margin-top: 10px;
        background-color: rgba(255, 255, 255, .9)!important;
        border: solid 2px #ccc;
    }

    .panel-heading {
        background-color: #CCCCCC!important; /*#8AFFDF!important;*/
    }

    #accordion_search_bar {
        border: solid 2px #ccc;
    }

    .btn-default {
        border: solid 1.5px #ccc;
    }

    .fa-search {
        font-size: 1.3em;
    }

    .fa-paw {
        font-size: 1.4em;
        color: #6B7F7A;
    }    
</style>

<div class="col-lg-12">

    <div class="row">

        <section class="panel panel-default">

            <div class="panel-body">

                <fieldset>
                    <legend>
                        <h3> MEMILIH DOKTER YANG DI INGINKAN</h3>
                        <h5> Pada bagian ini,  pilihlah Dr yang diinginkan. Pilih salah satu.</h5>
                    </legend>
                </fieldset>

                <div class="row">

                    <div class="col-lg-12">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search" aria-hidden="true"></i></button>
                            </span>
                            <input type="search" id="accordion_search_bar" class="form-control" placeholder="Cari skema yang diinginkan!">
                        </div>
                        <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>

                <div class="row">
                    <div class="col-lg-12 col-xs-12">

                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php 
                                    $no=1;
                                    foreach ($dt_kursus->result() as $k)
                                    {?>    
                         <div class="panel panel-default" id="collapse<?php echo $no ?>_container">
                                    <div class="panel-heading" role="tab" id="heading_<?php echo $no ?>">
                                        <h4 class="panel-title">
                                            <a role="button" 
                                               data-toggle="collapse" 
                                               data-parent="#accordion" 
                                               href="#collapse_<?php echo $no ?>" 
                                               aria-expanded="true" 
                                               aria-controls="collapse_<?php echo $no ?>">
                                                <i class="fa fa-arrow-circle-o-right fa-fw" aria-hidden="true"></i><?php echo $no ?>. <?php echo $k->nm_kursus; ?>                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse_<?php echo $no ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_0">
                                        <div class="panel-body">
                                            <div><font face="Arial, Verdana"><span>Spesifikasi Dr: </span></font></div>
                                            <div>
                                                <ol>
                                                     <?php
                                        $detail=$this->model_kursus->tampil_detail($k->kd_kursus);
                                        foreach ($detail->result() as $d)
                                        {
                                        ?>
                                                    <li><span><?php echo $d->nm_unit; ?></span></li>
                                                     <?php }?>    
                                                </ol>
                                            </div>
                                            <br />
                                            <a data-toggle="tooltip" data-placement="right" title="Pilih kursus ini dan ke tahapan selanjutnya" href='#' 
                                               class="nextBtn btn-sm btn-success" onclick='pilih_skema(<?php echo substr($k->kd_kursus,1,3); ?>)' >PILIH</a>
                                        </div>
                                    </div>
                                </div>
                            
                            <?php $no++; }
                                        ?>
                        
                    </div>


                </div>
                <!-- Row -->
            </div>
            <!-- Col -->
        </section>

    </div>

</div>
<!-- Container -->

<script type="text/javascript">
    $('.collapse').not(':first').collapse(); // Collapse all but the first row on the page.

// This section makes the search work.
    (function () {
        var searchTerm, panelContainerId;
        $('#accordion_search_bar').on('change keyup', function () {
            searchTerm = $(this).val();
            $('#accordion > .panel').each(function () {
                panelContainerId = '#' + $(this).attr('id');

                // Makes search to be case insesitive 
                $.extend($.expr[':'], {
                    'contains': function (elem, i, match, array) {
                        return (elem.textContent || elem.innerText || '').toLowerCase()
                                .indexOf((match[3] || "").toLowerCase()) >= 0;
                    }
                });

                // END Makes search to be case insesitive

                // Show and Hide Triggers
                $(panelContainerId + ':not(:contains(' + searchTerm + '))').hide(); //Hide the rows that done contain the search query.
                $(panelContainerId + ':contains(' + searchTerm + ')').show(); //Show the rows that do!

            });
        });
    }());
// End Show and Hide Triggers

// END This section makes the search work.
</script>

                </div>
                <div class="row setup-content" id="step-2">
                    <link href="http://www.lspkomputer.id/assets/plugins/select2-4.0.3/dist/css/select2.min.css" rel="stylesheet" type="text/css"/>


<div class="col-xs-12 formStep2">
    <div class="col-md-12" style="margin-bottom: 20px;">

        <fieldset><legend><h3>FORMULIR PENDAFTARAN KURSUS</h3>
                <h5> Pada bagian ini,  cantumkan data pribadi pada saat ini.</h5></legend></fieldset>

        <div class="col-md-3">
            <label class="control-label">No.Identitas <b class="harus_diisi">*</b></label>
        </div>

        <div class="col-md-9">
            <div class="form-group">

                <input  maxlength="100" type="text" name="no_identitas" id="no_identitas" required class="form-control" placeholder="Masukkan Nomor Identitas (KTP/SIM/KARTU PELAJAR)"  /> 
                <input type="hidden" id="step_langkah">      </div>
        </div>
        <div id="div_pilih">

        </div>
        <div class="col-md-3">
            <label class="control-label">Nama Lengkap <b class="harus_diisi">*</b> </label>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <input  maxlength="100" type="text" name="nama_lengkap" id="nama_lengkap" required class="form-control" placeholder="Masukkan Nama Lengkap"  />       </div>
        </div>
        <div class="col-md-3">
            <label class="control-label">Berat Badan <b class="harus_diisi">*</b> </label>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <input  maxlength="100" type="text" name="organisasi" id="organisasi" required class="form-control">       </div>
        </div>

        <div class="col-md-3">
            <label class="control-label">Pernah Periksa sebelumnya? </label>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                
              <input type="checkbox" name="radio" value="1" id="radio">
Checklist jika pernah periksa sebelumnya </div>
        </div>
        <div class="col-md-3">
            <label class="control-label">Tempat - Tanggal Lahir</label>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input  maxlength="100" type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir"  />      

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <input  maxlength="100" type="text" id="tanggal_lahir" name="tanggal_lahir"  class="form-control" placeholder="Contoh 1985-03-19"  />        </div>
        </div>        

        <div class="col-md-3">
            <label class="control-label">Jenis Kelamin </label>
        </div>

        <div class="col-md-9">
            <div class="form-group">

                <select class="form-control validate[required]" name="jenis_kelamin" id="jenis_kelamin" >
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div id="div_bukti" style="display:none;"></div>

        </div>
        <div class="col-md-3">
            <label class="control-label">Alamat</label>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Lengkap Domisili"> </textarea>
            </div>
        </div>

        <div class="col-md-3">
            <label class="control-label">No.HP  <b class="harus_diisi">*</b> </label>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <input  maxlength="100" type="text" name="no_telp" id="no_telp" required class="form-control" placeholder="Masukkan hanya satu No HP yang aktif"  />   
            </div>
        </div>

        <div class="col-md-3">
            <label class="control-label">Email  <b class="harus_diisi">*</b> </label>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <input  maxlength="100" type="text" name="email" id="email" required class="form-control" placeholder="Masukkan Email"  />   
                <input type="hidden" id="validasi_email">

            </div>
        </div>

        <div class="col-md-3">
            <label class="control-label">Tinggi Badan</label>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <input  maxlength="100" type="text" name="pend_terakhir" id="pend_terakhir"  class="form-control" placeholder="Masukkan Berat Badan)"  />   
            </div>
        </div>

        <div class="col-md-3">
            <label class="control-label">Asal </label>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <input  maxlength="100" type="text" name="perg_tinggi" id="perg_tinggi"  class="form-control" placeholder="Masukkan Asal Lahir"  />   
            </div>
        </div>


        <div class="col-md-3">
            <label class="control-label">Pekerjaan</label>
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <input  maxlength="100" type="text" name="jurusan" id="jurusan" class="form-control"  placeholder="Masukkan Pekerjaan"  />   
            </div>
        </div>
        <div class="col-md-3">
            <label class="control-label"> Gol Darah</label>
                 </div>
                
                <div class="col-md-9">
                  <div class="form-group">
                   <select name="id_asesor" id="id_asesor" class="combobox form-control select2" required >
                       <?php foreach ($dt_lokasi->result() as $lok)
                       {
                        echo "<option value='$lok->kd_lokasi'>$lok->nm_lokasi</option>";
                       
                       }
?>
                            
                   </select>  
                  </div>
                  </div>
                <div class="col-md-9">
                  <div class="form-group"></div>           
                              
                              
            </div>
          <div class="col-md-9">
            <div class="form-group">
              <div style="margin-top:20px; margin-bottom:20px;"> 
                <button id="selanjutnya-2" class="btn btn-success nextBtn btn-md pull-left" type="button" >Selanjutnya (Langkah 3)</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="http://www.lspkomputer.id/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="http://www.lspkomputer.id/assets/plugins/select2-4.0.3/dist/js/select2.full.min.js" type="text/javascript"></script>

<script type="text/javascript">

    $("#tempat_ujik").select2({
        placeholder: "Tempat Uji Kompetensi",
        allowClear: true
    });
    $("#jadwal_id").select2({
        placeholder: "Jadwal Uji Kompetensi",
        allowClear: true
    });
    $("#id_asesor").select2({
        placeholder: "Pilih Asesor Kompetensi",
        allowClear: true
    });

</script>                    </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-md-12 formStep3">
    <fieldset><legend><h3> UPLOAD BUKTI PENDUKUNG</h3>
            <h5> Cantumkan satu atau beberapa bukti pendukung (portofolio,Identitas Pribadi,BPJS dll) yang terkait dengan skema atau unit kompetensi yang telah diambil. Kemudian jika dimungkinkan scan dan upload dokumen tersebut kedalam sistem ini</h5></legend></fieldset>
    <div class="col-md-12" id="div_unit_dipilih">
        <div id="unit_dipilih"></div>
    </div>

    <div class="col-md-12" id="div_list_bukti_pendukung">
        <div class="alert alert-info">
            Pada bagian ini, anda diminta untuk input untuk bukti pendukung dari mandatori dokumen(Paspoto, BPJS, Identitas Pribadi)
        </div>

        <div class="col-md-6 col-xs-12" align="right">Foto (Passfoto) <b class="harus_diisi">*</b> :</div>
        <div class="col-md-6 col-xs-12">
            <input type="hidden" name="nama_dokumen[]" class="nama_dokumen" value="foto" />
            <input type="file" name="file_foto" id="foto" class="form-control input-sm uploadData" required />
        </div>
        <div style="clear: both;margin-bottom: 10px;"></div>

        <div class="col-md-6 col-xs-12" align="right">Identitas Pribadi (KTP / SIM / Kartu Pelajar / Passport) <b class="harus_diisi">*</b> :</div>
        <div class="col-md-6 col-xs-12">
            <input type="hidden" name="nama_dokumen[]" class='nama_dokumen' value="ktp" />
            <input type="file" name="file_id" id="ktp" class="form-control input-sm uploadData" required />
        </div>
        <div style="clear: both;margin-bottom: 10px;"></div>

        <div class="col-md-6 col-xs-12" align="right">BPJS <b class="harus_diisi">*</b> :</div>
        <div class="col-md-6 col-xs-12">
            <input type="hidden" name="nama_dokumen[]" id="ijazah" class="nama_dokumen" value="ijazah" />
            <input type="file" name="file_ijazah" class="form-control input-sm uploadData" required id="file_ijazah" />
        </div>
        <div style="clear: both;margin-bottom: 10px;"></div>

        <div style="clear: both;margin-bottom: 10px;"></div>
        

        <div style="clear: both;margin-bottom: 30px;"></div>
        <!--
                <fieldset><legend>IJAZAH PENDIDIKAN FORMAL ATAU BIODATA PRIBADI</legend>
                    <input type="hidden"  name="wajib1" id="wajib1"  required>
                    <input type="hidden"  name="folder" id="folder" value="f96185c36984d674e23ff344671c1da4"  required>
                    <input type="hidden"  name="drophidden" id="drophidden"  required>
                    <div class="col-md-12">
                        <input type="button" id="bukti_pendukung_add" class="btn btn-primary" style="margin-top: 5px;" value=" ADD MORE ">
                    </div>
                    <div id="list_isi"></div>
                </fieldset>
                <br />
        
                <fieldset><legend>SERTIFIKAT KETERAMPILAN / PELATIHAN</legend>
                    <div class="col-md-12">
                        <input type="button" id="bukti_pendukung_add2" class="btn btn-primary" style="margin-top: 5px;" value=" ADD MORE ">
                    </div>
                    <div id="list_isi2"></div>
        
                </fieldset><br />
        
                <fieldset><legend>PORTOFOLIO / PENGALAMAN KERJA</legend>
                    <div class="col-md-12">
                        </form>
        
        
                        <input type="button" id="bukti_pendukung_add3" class="btn btn-primary" style="margin-top: 5px;" value=" ADD MORE ">
                    </div>
                    <div id="list_isi3"></div>
                </fieldset>
        
                <br />
        
                <div class="alert alert-warning" style="margin-top: 10px;">
                    Note : Dapat lebih dari 1 bukti pendukung.
                </div>
        
                <fieldset><legend>UPLOAD BUKTI PENDUKUNG </legend>
                    <div class="col-md-12">
        
                        <div id="upload_drop" class="dropzone"></div>
                    </div>
        
        
                </fieldset>-->

        <br />
        <div class="col-md-12" style="margin-bottom: 20px;">
            <button class="btn btn-success nextBtn btn-md pull-left" type="button" id="selanjutnya-3">Selanjutnya (Langkah 4)</button>
        </div>   
    </div>

</div>

<script type="text/javascript">

    $("#btn_addmore").click(function () {

        var addmore = $(".dokumen_tambah");
        var item = "<div style='clear:both;margin-top:20px;'></div>";
        item += "<div class='col-md-6 col-xs-12'>";

        item += dropdown_dokumen();

        item += "</div>";
        item += "<div class='col-md-6 col-xs-12'><input type='file' name='file_data[]' class='form-control inputControl uploadData' /></div>";
        item += "<div style='clear:both;margin-top:10px;'></div>";

        addmore.append(item);

        return false;
    })

    function dropdown_dokumen() {
        var data = [
            {name: '', value: '- Nama Dokumen -'},
            {name: 'foto', value: 'Foto'},
            {name: 'ktp', value: 'KTP'},
            {name: 'ijazah', value: 'Ijazah'},
            {name: 'skkd', value: 'Surat Keterangan Keaslian Dok.'},
            {name: 'cp', value: 'Contoh / Report Pekerjaan (CP)'},
            {name: 'surat_pelatihan', value: 'Sertifikat Pelatihan (SK)'},
            {name: 'surat_referensi', value: 'Surat Referensi dari Perusahaan'},
            {name: 'job_description', value: 'Job Description (JD)'},
            {name: 'demonstrasi_pekerjaan', value: 'Demonstrasi Pekerjaan (De)'},
            {name: 'ws[]', value: 'Wawancara dg. Supervisor, teman atau klien'},
            {name: 'pengalaman_industri', value: 'Pengalaman Industri (Pe)'},
            {name: 'bukti_relevan', value: 'Bukti-Bukti Lain yang Masih Relevan / CV'},
            {name: 'sertifikat_expired', value: 'Sertifikat Expired'}
        ];

        var dropdown = "<select name='nama_dokumen[]' class='form-control nmdokumen'>";
        $.each(data, function (key, hasil) {
            //console.log(hasil);
            dropdown += "<option value='" + hasil.name + "'>" + hasil.value + "</option>";
        });
        dropdown += "</select>";

        return dropdown;
    }



</script>                </div>

                <div class="row setup-content" id="step-4">
                    <div class="col-xs-12">

    <div class="col-md-12">
        <fieldset><legend><h3> FR-APL 02 ASESMEN MANDIRI</h3>
                <h5> Pastikan anda kompeten sesuai dengan elemen dan kuk yang ada pada setiap unit-unit kompetensi berikuti ini. Pasangkan elemen/kuk dengan bukti pendukung yang telah anda sebutkan sebelumnya.</h5></legend></fieldset>


        <div class="table-responsive" id="div_skema_yang_dipilih">
            <div id="div_inner"></div>
        </div>
        <div class="col-md-12" style="margin-bottom: 20px;">
            <button class="btn btn-success nextBtn btn-md pull-left" type="button" id="selanjutnya-4">Tahapan Pembayaran</button>
        </div>
    </div>


</div>                </div>
                <div class="row setup-content" id="step-5">
                    <div class="col-xs-12">

    <div class="col-md-12">
        <fieldset>
            <legend>
                <h3> Tahapan Pembayaran</h3>
                <h5> Pilih metode pembayaran yang anda inginkan.</h5>
            </legend>

            <div class="col-md-12 " style="margin-bottom: 20px;">
               <input type="hidden" name="result_type" id="result-type">
               <input type="hidden" name="result_data" id="result-data">
               <input type="hidden" name="data_pembayaran" id="data_pembayaran">
               
               <div class="col-md-12">
                <label>Lakukan Pembayaran sesuai dengan harga dasar skema sertifikasi yang diambil</label>  Rp. <label id="label_harga"></label>
                <p>
                    Pembayaran dapat dilakukan melalui Transfer, Kartu Kredit , Mobile Banking, SMS banking atau melalui gerai Indomaret dan Alfamart.
                </p>
                <input type="hidden" name="hargadasar" id="hargadasar">
		<div class="well col-md-12"><input name="kode_referensi" class="form-control" placeholder="Masukkan Kode Orang/Lembaga yang mereferensi. Apabila tidak ada bisa dikosongkan" /></div>
            </div>
            <button class="btn btn-success nextBtn btn-md pull-left" type="button" id="selanjutnya-5" style="margin-right: 10px">Pembayaran Online</button> &nbsp 
            <button class="btn btn-primary nextBtn btn-md pull-left" type="button" id="pembayaran_kolektif">Pembayaran Kolektif</button>

            
        </div>

    </fieldset>

    <!-- The form is placed inside the body of modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal3" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 id="myModalLabel" class="modal-title">ERROR !!!</h4>
                </div>
                <div class="modal-body">
                    <b>MAAF</b> Pastikan Kolom Nama Lengkap dan Email sudah terisi .
                </div>
                <div class="modal-footer">
                    <div class="">
                        <a href="javascript:void();" class="btn btn-danger" data="" id="tlanjutkan">Coba Lagi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


</div>                </div>
        </div>    
    </form>
</div>
<script src="http://www.lspkomputer.id/assets/js/jquery.v2.min.js" type="text/javascript"></script>
<script src="http://www.lspkomputer.id/assets/js/bootstraps/bootstrap.min.js" type="text/javascript"></script>
<script src="http://www.lspkomputer.id/assets/js/datepicker.js"></script>
<script src="http://www.lspkomputer.id/assets/js/dropzone.js"></script>
<script>
    var base_url = "http://www.lspkomputer.id/";
    var folder = "f96185c36984d674e23ff344671c1da4";
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("div#upload_drop", {
        url: base_url + "welcome/upload",
        paramName: 'file',
        maxFilesize: 50, // MB
        maxFiles: 10,
        dictDefaultMessage: 'Seret file bukti pendukung kesini, atau klik di area ini',
        init: function () {
            this.on("uploadprogress", function (file, progress) {
                //console.log("File progress", progress);
            });
            this.on("success", function (file, progress) {
                $('#drophidden').val('1');
            });
        },
        sending: function (file, xhr, formData) {
            formData.append('folder', folder);
        }

    })
//var myDropzone = new Dropzone("div#okok", { url: "welcome/upload"});

</script>

<script>
    function add_combo() {
        var hasil = [];
        $("input[name='file_data[]']").each(function () {
            var fileName = $(this).val().split('/').pop().split('\\').pop();
            //console.log(fileName);
            hasil.push(fileName);
        });
        return hasil;
    }
    function create_combo() {
        var bukti_sertifikat = "";
        var bukti_s = "";
//        $(".class_evidence").each(function () {
//            //alert($(this).val());
//            bukti_sertifikat = bukti_sertifikat + "<option value='" + $(this).val() + "'>" + $(this).val() + "</option>";
//            bukti_s = bukti_s + "<option selected value='" + $(this).val() + "'>" + $(this).val() + "</option>";
//            //var bukti_sertifikat = bukti_sertifikat+" "+opsi;
//        });
//        $(".class_evidence2").each(function () {
//            //alert($(this).val());
//            bukti_sertifikat = bukti_sertifikat + "<option value='" + $(this).val() + "'>" + $(this).val() + "</option>";
//            bukti_s = bukti_s + "<option selected value='" + $(this).val() + "'>" + $(this).val() + "</option>";
//            //var bukti_sertifikat = bukti_sertifikat+" "+opsi;
//        });
//        $(".class_evidence3").each(function () {
//            //alert($(this).val());
//            bukti_sertifikat = bukti_sertifikat + "<option value='" + $(this).val() + "'>" + $(this).val() + "</option>";
//            bukti_s = bukti_s + "<option selected value='" + $(this).val() + "'>" + $(this).val() + "</option>";
//            //var bukti_sertifikat = bukti_sertifikat+" "+opsi;
//        });

        var data = add_combo();
        $.each(data, function (key, value) {
            bukti_sertifikat = bukti_sertifikat + "<option value='" + value + "'>" + value + "</option>";
            bukti_s = bukti_s + "<option selected value='" + value + "'>" + value + "</option>";
        });

        //alert(bukti_sertifikat);
        $(".select_bukti").text('');
        $(".select_bukti").append("<select name='pilih[]' required class='form-control drop-pilih'>" + bukti_sertifikat + "</select>");
        $("#div_bukti").append("<select multiple name='bukti_pendukung[]'>" + bukti_s + "</select>");
        //$("#div_bukti").show();

    }
    $('#all_k').on('click', function () {
        alert('ok');
    });
    $('#all_bk').on('click', function () {
        alert('ok');
    });
    $(document).ready(function () {
        $('#email').val();
        $('#validasi_email').val();

         $("#pembayaran_kolektif").click(function (event) {
                var tanya = confirm('Pembayaran dilakukan secara kolektif oleh lembaga yang sudah bekerja sama dengan LSP Komputer. Apakah Data yang anda isi sudah benar.  ?');
                            if (tanya) {
                                $('#form_submit').submit();
                           }
        })
        $("#selanjutnya-5").click(function (event) {
            event.preventDefault();
            //$(this).attr("disabled", "disabled");
            //$(this).hide();
            namalengkap_val = $('#nama_lengkap').val();
            namajadwal_val = $('#nama_skema').text();
            hargadasar = $('#hargadasar').val();
            no_telp = $('#no_telp').val();
            email = $('#email').val();
            //if (namalengkap_val === '' || email_val === '') {

            //$('#myModal').modal('hide');
            //  $('#myModal3').modal('show');

            //} else {

            $.ajax({
                url: "http://www.lspkomputer.id/welcome/token",
                cache: false,
                data: {
                    biaya_param: hargadasar, //biaya_val,
                    namajadwal_param: 'Uji Kompetensi ' + namajadwal_val, //namajadwal_val,
                    qty_param: 1,
                    namalengkap_param: namalengkap_val,
                    telp_param: no_telp,
                    email_param: email
                },
                success: function (data) {
                    //location = data;
                    //changeResult(type,data);
                    console.log('token = ' + data);

                    var resultType = document.getElementById('result-type');
                    var resultData = document.getElementById('result-data');
                    
//                    console.log(resultType);
//                    console.log(resultData);
                    
                    snap.pay(data, {

                        onSuccess: function (result) {
                            //alert('ok');
                            changeResult('success', result);
                            console.log(result.status_message);
                            console.log(result);
                            
                            $("#data_pembayaran").val(JSON.stringify(result));

                            //$("#payment-form").submit();
                            $('#form_submit').submit();

//                            var tanya = confirm('Apakah Data yang anda isi sudah benar ?');
//                            if (tanya) {
//                                $('#form_submit').submit();
//                            }
                        },
                        onPending: function (result) {
                            console.log(result);
                            $("#data_pembayaran").val(JSON.stringify(result));
                            //alert($("#data_pembayaran").val());
                            //$('#form_submit').submit();
                            
                            var tanya = confirm('Apakah Data yang anda isi sudah benar ?');
                            if (tanya) {
                                $('#form_submit').submit();
                            }
                        },
                        onError: function (result) {
                            //alert('ok3');
                            changeResult('error', result);
                            console.log(result.status_message);
                            $("#data_pembayaran").val(JSON.stringify(result));
                            $("#form_submit").submit();
                        }
                    });
                }
            });

            //}

        });
        
        $("#selanjutnya-4").click(function () {
            $('#step_langkah').val('5');
            var valuess = $("select[name^='pilih']").map(function (idx, ele) {
                $('#div_pilih').append('<input type="hidden" name="pilih_array[]" value="' + $(ele).val() + '" />');
                //console.log($(ele).val());
            }).get();
            //var pilihid = $('.drop-pilih').val();
            //console.log(pilihid);
            //return false;
            //preventDefault();
            var cek_radio = $("input:radio[class='value_bk']").is(":checked");
            if (cek_radio == true) {
                alert("Semua Elemen Kompetensi atau KUK harus Kompeten");
            }
            // 
            id = $('#skema_yang_dipilih').val();
            $.ajax({
                type: 'post',
                url: base_url + 'welcome/harga_skema',
                data: {id: id},
                cache: false,
                success: function (data) {
                    $('#hargadasar').val(data);
                    $('#label_harga').text(formatCurrency(data));
                }
            });

        })
        $("#selanjutnya-3").on('click', function () {
            var cekStep3 = $(".formStep3 input:required");
            var countDt = 0;
            $.each(cekStep3, function (key, value) {
                if (value.value == "") {
                    $("#" + value.id).focus();
                    return false;
                } else {
                    countDt++;
                }
            })
            
            if (countDt < cekStep3.length) {
                alert("Upload Data Rekomendasi terlebih dahulu !");
                return false;
            }

            $('#step_langkah').val('4');
            var validasiwajib1 = $('#wajib1').val();
            var drophidden = $('#drophidden').val();
            var class_evidence_required = $('.class_evidence_required').val();
            //alert(drophidden);
            //console.log(validasiwajib1);

            if (class_evidence_required === 'undefined' || class_evidence_required == "") {
                alert('Masukkan Nama Bukti Pendukung. !');
                return false;
            }
            if (validasiwajib1 == '') {
                alert('Bukti Pendukung Kosong. Klik Add More!');
                preventDefault();
            } else if (drophidden == "") {
                alert('Upload Bukti Pendukung');
                preventDefault();
            } else {
                id = $('#skema_yang_dipilih').val();
                $('#form_submit').submit();
                //alert('coba');
                /*$.ajax({
                    type: 'post',
                    url: base_url + 'welcome/uji_kompetensi_skema',
                    data: {id: id},
                    cache: false,
                    success: function (data) {
                        $('#div_inner').remove();
                        $('#div_skema_yang_dipilih').append('<div id="div_inner"></div>');
                        $('#div_inner').append(data);
                        create_combo();
                        $('#all_bk').attr('checked', true);
                        $('.value_bk').attr('checked', true);
                        $('#all_k').change(function () {
                            $('#all_bk').attr('checked', false);
                            $('.value_k').prop('checked', $(this).prop("checked"));
                        })
                        $('#all_bk').click(function () {
                            $('#all_k').attr('checked', false);
                            $('.value_bk').prop('checked', $(this).prop("checked"));
                        })
                    }
                });*/
            }
        });
        $("#selanjutnya-2").click(function (e) {
            var cekRequired = $(".formStep2 input:required")
            var countRequired = 0
            $.each(cekRequired, function (key, value) {
                if (value.value === "") {
                    $("#" + value.id).focus();
                    return false;
                }
                countRequired++;
            })
            if (countRequired < cekRequired.length) {
                return false;
            }

            $('#step_langkah').val('3');
            $('#wajib1').val("");
            $('#drophidden').val("");
//validasi_email = $('#email').val();
//if(validasi_email != ""){

            var id = $('#skema_yang_dipilih').val();
            $.ajax({
                type: 'post',
                url: "<?php echo base_url();?>index.php/daftar/detail",
                data: 'id='+id,
                cache: false,
                success: function (data) {
                    $('#unit_dipilih').remove();
                    $('#div_unit_dipilih').append('<div id="unit_dipilih"></div>');
                    $('#unit_dipilih').append(data);
                    create_combo();
                    $('#all_bk').attr('checked', true);
                    $('.value_bk').attr('checked', true);
                    $('#all_k').change(function () {
                        $('#all_bk').attr('checked', false);
                        $('.value_k').prop('checked', $(this).prop("checked"));
                    })
                    $('#all_bk').click(function () {
                        $('#all_k').attr('checked', false);
                        $('.value_bk').prop('checked', $(this).prop("checked"));
                    })
                    $('#file_bukti_pendukung').focus();
                }
            });
        });
    });</script>

<script>
    $(function () {
        $("#from_date").datepicker({
            format: 'yyyy-mm-dd',
            startDate: '-3d'
        });
        $("#to_date").datepicker({
            format: 'yyyy-mm-dd',
            startDate: '-3d'
        });
    })
    $('[data-toggle="tooltip"]').tooltip()
</script>
<script type="text/javascript">
    function pilih_skema(id) {
        $('#skema_yang_dipilih').val(id);
        //document.getElementById("pilih_skema").value = document.getElementById("kode").value;
        $('#step_langkah').val('2');
        //alert('coba');
    }
    function hapus_evidence(id) {
        $(".evidence-" + id).remove();
        var isiwajib1 = parseInt($('#wajib1').val());
        $('#wajib1').val(isiwajib1 - 1);
    }
    function hapus_evidence2(id) {
        $(".evidence2-" + id).remove();
    }
    function hapus_evidence3(id) {
        $(".evidence3-" + id).remove();
    }
    $(document).ready(function () {
        $('#login-btn').hide();
        var i = 2;
        $("#bukti_pendukung_add").click(function () {
            var isiwajib1 = $('#wajib1').val();
            if (isiwajib1 == "") {
                isiwajib1 = 0;
            }
//var isiwajib1 = parseInt($('#wajib1').val());
            $('#wajib1').val(isiwajib1 + 1);
            var isi = "<div class='col-md-4 evidence-" + i + "' style='padding-top: 10px;'>\n\
<input required type='text' name='evidence_name[]' class='form-control input-sm txtcomponent class_evidence_required class_evidence' required placeholder='Masukkan Nama Bukti Pendukung' />\n\
</div>\n\
<div class='col-md-2 evidence-" + i + "' style='padding-top: 10px;'>\n\
    <div class='btn-group evidence-" + i + "' role='group' aria-label='...'>\n\
        <button type='button' class='btn btn-danger btn-sm' id='bukti_pendukung_rem' onclick='hapus_evidence(" + i + ")'>-</button>\n\
    </div>\n\
</div>\n\
<div id='linebrs' class='evidence-" + i + "'></div>";
            $("#list_isi").append(isi);
            i++;
//$(".class_evidence:last").css({ backgroundColor: "green", fontWeight: "bolder" });
            $(".class_evidence:last").focus();
        });
        var ii = 2;
        $("#bukti_pendukung_add2").click(function () {
            var isi2 = "<div class='col-md-4 evidence2-" + ii + "' style='padding-top: 10px;'>\n\
            <input required type='text' name='evidence_name2[]' class='form-control input-sm txtcomponent class_evidence_required class_evidence2' placeholder='Masukkan Nama Bukti Pendukung' />\n\
        </div>\n\
        <div class='col-md-2 evidence2-" + ii + "' style='padding-top: 10px;'>\n\
            <div class='btn-group evidence2-" + ii + "' role='group' aria-label='...'>\n\
                <button type='button' class='btn btn-danger btn-sm' onclick='hapus_evidence2(" + ii + ")'>-</button>\n\
            </div>\n\
        </div>\n\
        <div id='linebrs' class='evidence2-" + ii + "'></div>";
            $("#list_isi2").append(isi2);
            ii++;
            $(".class_evidence2:last").focus();
        });
        var iii = 2;
        $("#bukti_pendukung_add3").click(function () {
            var isi3 = "<div class='col-md-4 evidence3-" + iii + "' style='padding-top: 10px;'>\n\
            <input required type='text' name='evidence_name3[]' class='form-control input-sm txtcomponent class_evidence_required class_evidence3' placeholder='Masukkan Nama Bukti Pendukung' />\n\
        </div>\n\
        <div class='col-md-2 evidence3-" + iii + "' style='padding-top: 10px;'>\n\
            <div class='btn-group evidence3-" + iii + "' role='group' aria-label='...'>\n\
                <button type='button' class='btn btn-danger btn-sm' onclick='hapus_evidence3(" + iii + ")'>-</button>\n\
            </div>\n\
        </div>\n\
        <div id='linebrs' class='evidence3-" + iii + "'></div>";
            $("#list_isi3").append(isi3);
            iii++;
            $(".class_evidence3:last").focus();
        });
        var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn'),
                allPrevBtn = $('.prevBtn');
        allWells.hide();
        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                    $item = $(this);
            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });
        allNextBtn.click(function (e) {
            var steps = $('#step_langkah').val();
            var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url'],input[type='file']"),
                    isValid = true;
            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });
        allPrevBtn.click(function () {
            var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");
            $(".form-group").removeClass("has-error");
            prevStepWizard.removeAttr('disabled').trigger('click');
        });
        $('div.setup-panel div a.btn-primary').trigger('click');
    });



</script>
