<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lokasi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Tambah Lokasi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                      <?php echo form_open(''); ?>
    <table width="50%">
        <tr>
            <td width="25%">Kode</td>
            <td>:</td>
            <td><input type="text" name="kode" class="form-control" value="<?= $kodeunik; ?>" required readonly></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" class="form-control" required></td>
        </tr>
         <tr>
        <td><button type="submit" name="submit" class="btn btn-success btn-sm">Simpan</button> 
            <?php echo anchor('lokasi','Batal',array('class'=>'btn btn-sm btn-danger'));?></td>
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