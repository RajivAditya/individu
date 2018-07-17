<?php

class Lokasi extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper('pos');
        check_session();
        $this->load->model(array('model_lokasi'));
        $this->load->helper(array('form', 'url'));
         function format_rupiah($angka){
         $rupiah=number_format($angka,0,',','.');
            return $rupiah;
            }
    }
    function index()
    {
        $data['record']=  $this->model_lokasi->tampil_data();
        $this->template->load('template','lokasi/data',$data);
           
    }
    function tambah()
    {
        if(isset($_POST['submit']))
        {
            $kode=$this->input->post('kode');
                    
                    $this->model_lokasi->simpan();
                    redirect('lokasi');    
                        
        }
        else
        {
            $data['kodeunik'] = $this->model_lokasi->buat_kode();
            $this->template->load('template','lokasi/tambah',$data);
            
        }
        
    }
    function edit()
    {
        if(isset($_POST['submit'])){
                    
                    $this->model_lokasi->edit();
                    redirect('lokasi');  
                    }    
                 else
                     {
                    $id=  $this->uri->segment(3);
                    $data['record']= $this->model_lokasi->get_one($id)->row_array();
                    //$this->load->view('barang/edit',$data); 
                    $this->template->load('template','lokasi/edit',$data);
                }
    }
    function hapus()
       {
           $id=  $this->uri->segment(3);
           $this->model_lokasi->hapus($id);
           redirect('lokasi');
       }
}
?>
