<?php

class Model_unit extends CI_Model{
    
    function tampil_data()
    {
        return $this->db->get('dt_unit');
    }
    function buat_kode()
    {
        $this->db->select('RIGHT(dt_unit.kd_unit,3) as kode', FALSE);
		  $this->db->order_by('kd_unit','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('dt_unit');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kodejadi = "L".$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kodejadi;  
    }
    function simpan(){
        $data=array('kd_unit'=>  $this->input->post('kode'),
            'nm_unit'=>  $this->input->post('nama'));
        $this->db->insert('dt_unit',$data);
    }
    function edit()
    {
        $data=array('kd_unit'=>  $this->input->post('kode'),
            'nm_unit'=>  $this->input->post('nama'));
        $this->db->where('kd_unit',  $this->input->post('kode'));
        $this->db->update('dt_unit',$data);
    }
    function get_one($id){
        $param=array('kd_unit'=>$id);
        return $this->db->get_where('dt_unit',$param);
    }
    function hapus($id)
       {
        $this->db->where('kd_unit',$id);
        $this->db->delete('dt_unit');
       }
   function cek($kode){
        $chek= $this->db->get_where('dt_unit',array('kd_unit'=>$kode));
        if ($chek->num_rows()>0)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
}
?>
