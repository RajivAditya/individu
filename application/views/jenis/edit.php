<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Jenis</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Edit Jenis
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                    <?php echo form_open(); ?>
    <table>
        <tr>
            <td>Code</td>
            <td>:</td>
            <td><input type="text" name="kode" value="<?php echo $record['kd_jenis']; ?>" readonly="readonly" class="form-control" required></td>
        </tr>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $record['nm_jenis']; ?>" class="form-control" required></td>
        </tr>
        
         <tr>
             <td><button type="submit" name="submit" class="btn btn-sm btn-success">Simpan</button> 
                 <?php echo anchor('jenis','Batal',array('class'=>'btn btn-danger btn-sm'));?></td>
    </tr>
    </table>
</form>
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