<?php

class Kursus extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper('pos');
        check_session();
        $this->load->model(array('model_kursus','model_jenis','model_unit'));
        $this->load->helper(array('form', 'url'));
         function format_rupiah($angka){
         $rupiah=number_format($angka,0,',','.');
            return $rupiah;
            }
    }
    function index()
    {
        $data['record']=  $this->model_kursus->tampil_data();
        $this->template->load('template','kursus/data',$data);
           
    }
    function tambah()
    {
        if(isset($_POST['submit']))
        {
            $kode=  $this->input->post('kode');
            $cek=  $this->model_kursus->tampil_detail_temp($kode)->num_rows();
            if($cek=='0')
            {
                echo"<script>alert('data belum di input')</script>";
                echo"<script>window.location=history.go(-1)</script>";
            }
            else
            {
                $this->model_kursus->simpan();
                $this->model_kursus->simpan_detail($kode);
                $this->model_kursus->hapus_all_temp($kode);
                redirect('kursus'); 
            }
                      
                        
        }
        elseif(isset($_POST['add']))
        {
            $kd_unit=  $this->input->post('unit');
            $kd_kursus=  $this->input->post('kode');
            $cek = $this->model_unit->cek($kd_unit);
            if($cek==1)
            {
                $this->model_kursus->simpan_temp($kd_unit,$kd_kursus);
                $data['jenis']=  $this->model_jenis->tampil_data();
                $data['detail']= $this->model_kursus->tampil_detail_temp($kd_kursus);
                $data['unit']=  $this->model_unit->tampil_data();
                $data['head']=array('kode'=>$kd_kursus,'nama'=>  $this->input->post('nama'),'jenis'=>  $this->input->post('jenis'));
                $this->template->load('template','kursus/tambah',$data);
            }
            else
            {
                echo "<script>alert('kode unit Salah cek kembali')</script>";
                echo "<script>window.location=history.go(-1)</script>";
            }
                        
        }
        elseif(isset($_POST['hapus_det_temp']))
        {
            $id=  $this->input->post('no');
            $kd_kursus=$this->input->post('kode');
            $this->model_kursus->hapus_det_temp($id);
            $data['jenis']=  $this->model_jenis->tampil_data();
                $data['detail']= $this->model_kursus->tampil_detail_temp($kd_kursus);
                $data['unit']=  $this->model_unit->tampil_data();
                $data['head']=array('kode'=>$kd_kursus,'nama'=>  $this->input->post('nama'),'jenis'=>  $this->input->post('jenis'));
                $this->template->load('template','kursus/tambah',$data);
        }
        
        else
        {
            $data['kodeunik'] = $this->model_kursus->buat_kode();
            $data['jenis']=  $this->model_jenis->tampil_data();
            $data['detail']= $this->model_kursus->tampil_detail_temp($data['kodeunik']);
            $data['unit']=  $this->model_unit->tampil_data();
            $data['head']=array('kode'=>$data['kodeunik'],'nama'=>'','jenis'=>'');
            $this->template->load('template','kursus/tambah',$data);
            
        }
        
    }
    function edit()
    {
        if(isset($_POST['submit'])){
                    
            $kode=  $this->input->post('kode');
            $cek=  $this->model_kursus->tampil_detail_temp($kode)->num_rows();
            if($cek=='0')
            {
                echo"<script>alert('data belum di input')</script>";
                echo"<script>window.location=history.go(-1)</script>";
            }
            else
            {
                    $this->model_kursus->edit();
                    $this->model_kursus->hapus_detail($kode);
                    $this->model_kursus->simpan_detail($kode);
                    $this->model_kursus->hapus_all_temp($kode);
                    redirect('kursus');  
                    } 
        }
        elseif(isset($_POST['add']))
        {
            $kd_unit=  $this->input->post('unit');
            $kd_kursus=  $this->input->post('kode');
            $cek = $this->model_unit->cek($kd_unit);
            if($cek==1)
            {
                $this->model_kursus->simpan_temp($kd_unit,$kd_kursus);
                $data['jenis']=  $this->model_jenis->tampil_data();
                $data['detail']= $this->model_kursus->tampil_detail_temp($kd_kursus);
                $data['unit']=  $this->model_unit->tampil_data();
                $data['head']=array('kd_kursus'=>$kd_kursus,'nm_kursus'=>  $this->input->post('nama'),'kd_jenis'=>  $this->input->post('jenis'));
                $this->template->load('template','kursus/edit',$data);
            }
            else
            {
                echo "<script>alert('kode unit Salah cek kembali')</script>";
                echo "<script>window.location=history.go(-1)</script>";
            }
                        
        }
        elseif(isset($_POST['hapus_det_temp']))
        {
            $id=  $this->input->post('no');
            $kd_kursus=$this->input->post('kode');
            $this->model_kursus->hapus_det_temp($id);
            $data['jenis']=  $this->model_jenis->tampil_data();
                $data['detail']= $this->model_kursus->tampil_detail_temp($kd_kursus);
                $data['unit']=  $this->model_unit->tampil_data();
                $data['head']=array('kd_kursus'=>$kd_kursus,'nm_kursus'=>  $this->input->post('nama'),'kd_jenis'=>  $this->input->post('jenis'));
                $this->template->load('template','kursus/edit',$data);
        }
                 else
                     {
                    $id=  $this->uri->segment(3);
                    $this->model_kursus->hapus_all_temp($id);
                    $this->model_kursus->simpan_det_temp($id);
                    $data['jenis']=  $this->model_jenis->tampil_data();
                    $data['detail']= $this->model_kursus->tampil_detail_temp($id);
                    $data['unit']=  $this->model_unit->tampil_data();
                    $data['head']=  $this->model_kursus->get_one($id)->row_array();
                    //$this->load->view('barang/edit',$data); 
                    $this->template->load('template','kursus/edit',$data);
                }
    }
    function hapus()
       {
           $id=  $this->uri->segment(3);
           $this->model_kursus->hapus($id);
           redirect('kursus');
       }
       function get_unit()
       {
           $id=$_GET['kd_unit'];
           $unit=$this->model_kursus->get_unit($id)->row_array();
           echo $unit['nm_unit'];
           //echo "coba";
       }
}
?>
