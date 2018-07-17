<?php

class Unit extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper('pos');
        check_session();
        $this->load->model(array('model_unit'));
        $this->load->helper(array('form', 'url'));
         function format_rupiah($angka){
         $rupiah=number_format($angka,0,',','.');
            return $rupiah;
            }
    }
    function index()
    {
        $data['record']=  $this->model_unit->tampil_data();
        $this->template->load('template','unit/data',$data);
           
    }
    function tambah()
    {
        if(isset($_POST['submit']))
        {
            $kode=$this->input->post('kode');
            $hasil= $this->model_unit->cek($kode);
            if($hasil==1)
            {
               echo "<script>alert('kode sudah ada sebelumnya cek kembali')</script>";
               echo"<script>window.location=history.go(-1)</script>"; 
            }
            else
            {
                 $this->model_unit->simpan();
                 redirect('unit');      
            }
                    
                   
        }
        else
        {
            $this->template->load('template','unit/tambah');
            
        }
        
    }
    function edit()
    {
        if(isset($_POST['submit'])){
                    
                    $this->model_unit->edit();
                    redirect('unit');  
                    }    
                 else
                     {
                    $id=  $this->uri->segment(3);
                    $data['record']= $this->model_unit->get_one($id)->row_array();
                    //$this->load->view('barang/edit',$data); 
                    $this->template->load('template','unit/edit',$data);
                }
    }
    function hapus()
       {
           $id=  $this->uri->segment(3);
           $this->model_unit->hapus($id);
           redirect('unit');
       }
}
?>
