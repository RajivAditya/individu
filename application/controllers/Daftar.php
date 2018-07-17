<?php

class Daftar extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model(array('model_kursus','model_lokasi','model_daftar'));
    }
    function index()
    {
        $data['dt_kursus']=$this->model_kursus->tampil_data();
        $data['dt_lokasi']=  $this->model_lokasi->tampil_data();
        $this->template->load('template1','daftar',$data);
    }
    function berhasil()
    {
        $id=  $this->uri->segment(3);
        $data['formulir']=  $this->model_daftar->get_one($id)->row_array();
        $this->template->load('template1','berhasil',$data);
    }
    function detail()
    {
        $id=$_POST['id'];
        $kodemax = str_pad($id, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kodejadi = "K".$kodemax;    // hasilnya ODJ-9921-0001 dst.
	$kodejadi;
        $nm=$this->model_kursus->get_one($kodejadi)->row_array();
        echo "<h2>".$nm['nm_kursus']."</h2>"; 
        ?>
                <table width="100%">
                    <td style="border: 1px solid red;">
                        <table border="1" class="table table-striped table-bordered table-hover " id="dataTables-example">
                              <thead>
                                <tr>
                                    <td width="10" align="center"><strong>No</strong></td>
                                    <td align="center"><strong>Kode Unit</strong></td>
                                    <td align="center"><strong>Judul Unit Kompetensi</strong></td>
                                </tr>
                                </thead>
                                <tbody>

                                     <?php 
                                $np=1;
                                $subt=0;
                                $detail=$this->model_kursus->tampil_detail($kodejadi);
                                foreach ($detail->result() as $s)
                                {
                                    echo "<tr>
                                    <td>$np</td>
                                    <td>$s->kd_unit</td>
                                    <td><strong>$s->nm_unit</strong></td>  

                                </tr>";
                                    $np++;
                                } 
                                    ?>

                                </tbody>


                            </table> 
                    </td>
                </table>

                <?php
    }
    function simpan()
    {
        $id=  $this->input->post('skema_yang_dipilih');
        $kodemax = str_pad($id, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kodejadi = "K".$kodemax;    // hasilnya ODJ-9921-0001 dst.
	$kodejadi;
        $no_form=  $this->model_daftar->buat_kode();
        $no_id=  $this->input->post('no_identitas');
        $nm_lngkp=  $this->input->post('nama_lengkap');
        $organisasi=$this->input->post('organisasi');
        $pernah=  $this->input->post('radio');
        $tempat_lhr=$this->input->post('tempat_lahir');
        $tgl_lhr=  $this->input->post('tanggal_lahir');
        $jk=$this->input->post('jenis_kelamin');
        $alamat=$this->input->post('alamat');
        $no_hp=$this->input->post('no_telp');
        $email=$this->input->post('email');
        $pendidikan=$this->input->post('pend_terakhir');
        $nm_pddk=$this->input->post('perg_tinggi');
        $jurusan=$this->input->post('jurusan');
        $tempat_kursus=$this->input->post('id_asesor');
        $kd_dt=$kodejadi;
        $pasfoto=$_FILES['file_foto']['name'];
        $id_foto=$_FILES['file_id']['name'];
        $ijazah_foto=$_FILES['file_ijazah']['name'];
        $config['upload_path']='./uploads/';
        $config['allowed_types']='gif|jpg|png';
        $this->load->library('upload',$config);
        $file_name="file_foto";
        $file_name1="file_id";
        $file_name2="file_ijazah";
        $this->upload->do_upload($file_name);
        $this->upload->do_upload($file_name1);
        $this->upload->do_upload($file_name2);
        $username=  substr($nm_lngkp, 0,3).substr($kodejadi, 1,3);
        $password=  substr($nm_lngkp, 0,3).substr($tgl_lhr, 1,3);
        $tgl_daftar=date('Y-m-d');
        $data=array('no_form'=>$no_form,'no_id'=>$no_id,'nm_lngkp'=>$nm_lngkp,'organisasi'=>$organisasi,'pernah'=>$pernah
            ,'tempat_lhr'=>$tempat_lhr,'tgl_lhr'=>$tgl_lhr,'jk'=>$jk,'alamat'=>$alamat,'no_hp'=>$no_hp,'email'=>$email
            ,'pendidikan'=>$pendidikan,'nm_pddk'=>$nm_pddk,'jurusan'=>$jurusan,'tempat_kursus'=>$tempat_kursus,'kd_kursus'=>$kd_dt
            ,'pasfoto'=>$pasfoto,'idfoto'=>$id_foto,'ijazahfoto'=>$ijazah_foto,'username'=>$username,'password'=>$password,
            'tgl_daftar'=>$tgl_daftar);
        $this->db->insert('formulir',$data);
        redirect('daftar/berhasil/'.$no_form);
        
    }
}
?>
