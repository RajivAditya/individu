<?php

class Pendaftar extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->helper('pos');
        check_session();
        $this->load->model(array('model_daftar','model_kursus'));
        $this->load->helper(array('form', 'url'));
         function format_rupiah($angka){
         $rupiah=number_format($angka,0,',','.');
            return $rupiah;
            }
    }
    function index()
    {
        $data['record']=  $this->model_daftar->tampil_data();
        $this->template->load('template','pendaftar/data',$data);
    }
    function lihat()
    {
        $id=  $this->uri->segment(3);
        $data['formulir']=  $this->model_daftar->get_one($id)->row_array();
        $this->template->load('template','pendaftar/lihat',$data);
    }
}
?>
