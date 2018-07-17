<script>

function sama(){
    document.getElementById("kode2").value = document.getElementById("kode").value;
    document.getElementById("nama2").value = document.getElementById("nama").value;
    document.getElementById("jenis2").value = document.getElementById("jenis").value;
    var j=parseFloat(document.getElementById("jml").value);
      var i;
      for(i=1;i<=j;i++)
          {
             document.getElementById("nama3"+i).value = document.getElementById("nama").value;
             document.getElementById("jenis3"+i).value = document.getElementById("jenis").value;  
          }
}
window.onload=sama()
</script>
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Kursus</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Tambah Kursus
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table width="100%" class="table">
                                            <tr>
                                                <td width="50%">
                                                    <?php echo form_open(''); ?>
    <table width="100%">
        <tr>
            <td width="25%">Kode</td>
            <td>:</td>
            <td><input type="text" name="kode" id="kode" class="form-control" value="<?php echo $head['kd_kursus']; ?>" required readonly></td>
        </tr>
        <tr>
            <td width="25%">Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama" class="form-control" value="<?php echo $head['nm_kursus']; ?>" required onchange="sama()" ></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td>:</td>
            <td><select name="jenis" class="form-control" id="jenis" required onchange="sama()">
                    <?php
                    foreach($jenis->result() as $j)
                    {
                        echo "<option value='$j->kd_jenis'";
                        if (!(strcmp($j->kd_jenis, htmlentities($head['kd_jenis'], ENT_COMPAT, 'utf-8')))) {echo "SELECTED";}
                        echo " >$j->nm_jenis</option>";
                    }
                    ?>
                    <option>
                        
                    </option>
                </select></td>
        </tr>
         <tr>
        <td><button type="submit" name="submit" class="btn btn-success btn-sm">Simpan</button> 
            <?php echo anchor('kursus','Batal',array('class'=>'btn btn-sm btn-danger'));?></td>
    </tr>
    </table>
</form>
                                                </td>
                                                <td width="50%">
                                                    <?php echo form_open(''); ?>
    <table width="100%">
        <tr>
            <td width="25%">Unit Kompetensi</td>
            <td>:</td>
            <td>
                <input type="text" name="kode" id="kode2" value="<?php echo $head['kd_kursus']; ?>" required readonly hidden>
                <input list="dt_unit" name="unit" id="unit" class="get_unit form-control" value="" required>
            </td>
        </tr>
        <tr>
            <td width="25%"></td>
            <td></td>
            <td><input type="text" name="nama" id="nama2" value="<?php echo $head['nm_kursus']; ?>" required readonly hidden>
            <input type="text" class="form-control" name="nm_unit" id="nm_unit" readonly>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <select name="jenis" id="jenis2" required readonly onchange="sama()" hidden>
                    <?php
                    foreach($jenis->result() as $j)
                    {
                        echo "<option value='$j->kd_jenis'>$j->nm_jenis</option>";
                    }
                    ?>
                    <option>
                        
                    </option>
                </select>
                        
                   </td>
        </tr>
         <tr>
        <td><button type="submit" name="add" class="btn btn-success btn-sm">+</button></td>
    </tr>
    </table>
</form>
                                                </td>
                                            </tr>
                                        </table>
 <input type="hidden" name="jml" id="jml" value="<?php echo $detail->num_rows();?>" readonly>                                     
<table border="1" class="table table-striped table-bordered table-hover " id="dataTables-example">
  <thead>
    <tr>
        <td width="10" align="center">No</td>
        <td align="center">Kode Unit</td>
        <td align="center">Judul Unit Kompetensi</td>
        <td width="10"></td> 
    </tr>
    </thead>
    <tbody>
        
         <?php 
    $no=1;
    $subt=0;
    foreach ($detail->result() as $r)
    {
        echo "<tr>
        <td>$no</td>
        <td>$r->kd_unit</td>
        <td>$r->nm_unit</td>  
        <td>
        <form method='post'>
        <input type='hidden' name='no' id='no' value='$r->kd_detail' required>
        <input type='hidden' name='kode' id='kode$no' value='$head[kd_kursus]' required>     
        <input type='hidden' name='nama' id='nama3$no' value='$head[nm_kursus]' required>
        <input type='hidden' name='jenis' id='jenis3$no' value='$head[kd_jenis]' required>    
        <button type='submit' name='hapus_det_temp' class='btn btn-sm btn-danger' onclick='return confirmDialog();'> X</button></form>
        </td>    
    </tr>";
        $no++;
    } 
        ?>
        
    </tbody>
   
    
</table>
<datalist id="dt_unit">
    <?php
    foreach ($unit->result() as $u)
    {
        
        echo "<option value='$u->kd_unit'>$u->nm_unit</option>";         
    }
    ?>
    
</datalist>                                          
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