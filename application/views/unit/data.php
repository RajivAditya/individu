<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Unit</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Data Unit
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                       <?php echo anchor('unit/tambah','+',array('class'=>'btn btn-success btn-sm')); ?>
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
        <td>$r->kd_unit</td>
        <td>$r->nm_unit</td>
        <td>".  anchor('unit/edit/'.$r->kd_unit,'Edit',array('class'=>'btn btn-success btn-sm'))."</td>
        <td>".  anchor('unit/hapus/'.$r->kd_unit,'X',array('class'=>'btn btn-danger btn-sm','onclick'=>"return confirmDialog();"))."</td>     
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
