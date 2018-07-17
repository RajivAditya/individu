<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Kursus</h1>
                </div>
                <!-- /.col-lg-12 -->
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
                                       <?php echo anchor('kursus/tambah','+',array('class'=>'btn btn-success btn-sm')); ?>
                            <hr>
<table border="1" class="table table-striped table-bordered table-hover " id="dataTables-example">
    <thead>
    <tr>
        <td width="10">No</td>
        <td>Kode</td>
        <td>Nama</td>
        <td>Jenis Kursus</td>
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
        <td>";?>
        <input type="button" id="open<?php echo $no; ?>" class="btn btn-success btn-sm" value="->" onClick="document.getElementById('finput<?php echo $no;?>').style.display='block';document.getElementById('open<?php echo $no;?>').style.display='none';document.getElementById('close<?php echo $no;?>').style.display='block'">
        <input type="button" id="close<?php echo $no; ?>" class="btn btn-danger btn-sm" value="<-" style="display:none" onClick="document.getElementById('finput<?php echo $no;?>').style.display='none';document.getElementById('close<?php echo $no;?>').style.display='none';document.getElementById('open<?php echo $no;?>').style.display='block'">
        <?php
        echo"</td>    
        <td>$r->nm_kursus</td>
        <td>$r->nm_jenis</td>
        <td>".  anchor('kursus/edit/'.$r->kd_kursus,'Edit',array('class'=>'btn btn-success btn-sm'))."</td>
        <td>".  anchor('kursus/hapus/'.$r->kd_kursus,'X',array('class'=>'btn btn-danger btn-sm','onclick'=>"return confirmDialog();"))."</td>     
    </tr>";?>
        <tr>
            <td colspan="6">
                <div id="finput<?php echo $no;?>" style="display:none"> 
                <table border="1" class="table table-striped table-bordered table-hover " id="dataTables-example">
  <thead>
    <tr>
        <td width="10" align="center">No</td>
        <td align="center">Kode Unit</td>
        <td align="center">Judul Unit Kompetensi</td>
    </tr>
    </thead>
    <tbody>
        
         <?php 
    $np=1;
    $subt=0;
    $detail=$this->model_kursus->tampil_detail($r->kd_kursus);
    foreach ($detail->result() as $s)
    {
        echo "<tr>
        <td>$np</td>
        <td>$s->kd_unit</td>
        <td>$s->nm_unit</td>  
          
    </tr>";
        $np++;
    } 
        ?>
        
    </tbody>
   
    
</table> 
                 
               </div>
            </td>
        </tr>
                
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