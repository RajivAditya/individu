<?php

class Jenis extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper('pos');
        check_session();
        $this->load->model(array('model_jenis'));
        $this->load->helper(array('form', 'url'));
         function format_rupiah($angka){
         $rupiah=number_format($angka,0,',','.');
            return $rupiah;
            }
    }
    function index()
    {
        $data['record']=  $this->model_jenis->tampil_data();
        $this->template->load('template','jenis/data',$data);
           
    }
    function tambah()
    {
        if(isset($_POST['submit']))
        {
            $kode=$this->input->post('kode');
                    
                    $this->model_jenis->simpan();
                    redirect('jenis');    
                        
        }
        else
        {
            $data['kodeunik'] = $this->model_jenis->buat_kode();
            $this->template->load('template','jenis/tambah',$data);
            
        }
        
    }
    function edit()
    {
        if(isset($_POST['submit'])){
                    
                    $this->model_jenis->edit();
                    redirect('jenis');  
                    }    
                 else
                     {
                    $id=  $this->uri->segment(3);
                    $data['record']= $this->model_jenis->get_one($id)->row_array();
                    //$this->load->view('barang/edit',$data); 
                    $this->template->load('template','jenis/edit',$data);
                }
    }
    function hapus()
       {
           $id=  $this->uri->segment(3);
           $this->model_jenis->hapus($id);
           redirect('jenis');
       }
}
?>
