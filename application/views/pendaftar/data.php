<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Pendaftar Kursus</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Data Pendaftar Kursus
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                            <hr>
<table border="1" class="table table-striped table-bordered table-hover " id="dataTables-example">
    <thead>
    <tr>
        <td width="10">No</td>
        <td>No Form</td>
        <td>Tgl Daftar</td>
        <td>Nama Lengkap</td>
        <td>Organisasi</td>
        <td>No Hp</td>
        <td>Promo Expire</td>
        <td>Kursus</td>
        <td></td>
        <td></td>
    </tr>
    </thead>
    <tbody>
        
         <?php 
    $no=1;
    foreach ($record->result() as $r)
    {
        $exp=  substr($r->tgl_daftar,0,4)+1;
        $exp1=substr($r->tgl_daftar,8,2)."-".substr($r->tgl_daftar,5,2)."-".$exp;
        echo "<tr>
        <td>$no</td>
        <td><a href='pendaftar/lihat/$r->no_form'>$r->no_form</a></td>
        <td>".date('d-m-Y',  strtotime($r->tgl_daftar))."</td>
        <td>$r->nm_lngkp</td>
        <td>$r->organisasi</td>
        <td>$r->no_hp</td>
        <td>$exp1</td>
        <td><a href='".  base_url()."uploads/$r->pasfoto' target='blank'>Foto</a></td>
        <td><a href='".  base_url()."uploads/$r->idfoto' target='blank'>Identitas</a></td>
        <td><a href='".  base_url()."uploads/$r->ijazahfoto' target='blank'>Ijazah</a></td>    
 </tr>";
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