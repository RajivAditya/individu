<div class="row">
                <div class="col-lg-6">
                    <h1 class="page-header">Data Pendaftar</h1>
                </div>
                <!-- /.col-lg-6 -->
            </div>
<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Data Kursus
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
                                  <td>Organisasi</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['organisasi']; ?></td>
                                </tr>
                                <tr>
                                  <td>Pernah Mengikuti Kursus Sebelumnya?</td>
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
                                  <td>Pendidikan Terakhir</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['pendidikan']; ?></td>
                                </tr>
                                <tr>
                                  <td>Nama Sekolah / Universitas</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['nm_pddk']; ?></td>
                                </tr>
                                <tr>
                                  <td>Jurusan</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['jurusan']; ?></td>
                                </tr>
                                <tr>
                                  <td>Tempat Kursus</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['nm_lokasi']; ?></td>
                                </tr>
                                <tr>
                                  <td>Kursus Yang Dipilih</td>
                                  <td>:</td>
                                  <td><?php echo $formulir['nm_kursus']; ?></td>
                                </tr>
                              </tbody>
                            </table>
                            <div class="panel-heading"> <i class="fa fa-bar-chart-o fa-fw"></i>Data Pelajaran
                            </div><p>&nbsp;</p>
                            <table border="1" class="table table-striped table-bordered table-hover " id="dataTables-example">
    <thead>
    <tr>
        <td width="10">No</td>
        <td>Kode Unit</td>
        <td>Judul Unit Kompetensi</td>
       
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