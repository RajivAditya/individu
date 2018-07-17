<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Dokumen Pendukung</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Data Dokumen Pendukung
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                       <?php echo anchor('dokumen/tambah','+',array('class'=>'btn btn-success btn-sm')); ?>
                            <hr>
<table border="1" class="table table-striped table-bordered table-hover " id="dataTables-example">
    <thead>
    <tr>
        <td width="10">No</td>
        <td>Kode</td>
        <td>Nama</td>
        <td width="10"></td> 
        <td width="10"></td> 
    </tr>
    </thead>
    <tbody>
        
         <?php 
    $no=1;
    foreach ($record->result() as $r)
    {
        
        echo "<tr>
        <td>$no</td>
        <td>$r->kd_dok</td>
        <td>$r->nm_dok</td>
        <td>".  anchor('dokumen/edit/'.$r->kd_dok,'Edit',array('class'=>'btn btn-success btn-sm'))."</td>
        <td>".  anchor('dokumen/hapus/'.$r->kd_dok,'X',array('class'=>'btn btn-danger btn-sm','onclick'=>"return confirmDialog();"))."</td>     
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