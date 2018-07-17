<?php

class Dokumen extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper('pos');
        check_session();
        $this->load->model(array('model_dokumen'));
        $this->load->helper(array('form', 'url'));
         function format_rupiah($angka){
         $rupiah=number_format($angka,0,',','.');
            return $rupiah;
            }
    }
    function index()
    {
        $data['record']=  $this->model_dokumen->tampil_data();
        $this->template->load('template','dokumen/data',$data);
           
    }
    function tambah()
    {
        if(isset($_POST['submit']))
        {
            $kode=$this->input->post('kode');
                    
                    $this->model_dokumen->simpan();
                    redirect('dokumen');    
                        
        }
        else
        {
            $data['kodeunik'] = $this->model_dokumen->buat_kode();
            $this->template->load('template','dokumen/tambah',$data);
            
        }
        
    }
    function edit()
    {
        if(isset($_POST['submit'])){
                    
                    $this->model_dokumen->edit();
                    redirect('dokumen');  
                    }    
                 else
                     {
                    $id=  $this->uri->segment(3);
                    $data['record']= $this->model_dokumen->get_one($id)->row_array();
                    //$this->load->view('barang/edit',$data); 
                    $this->template->load('template','dokumen/edit',$data);
                }
    }
    function hapus()
       {
           $id=  $this->uri->segment(3);
           $this->model_dokumen->hapus($id);
           redirect('dokumen');
       }
}
?>
