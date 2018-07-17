<?php

class Model_jenis extends CI_Model{
    
    function tampil_data()
    {
        return $this->db->get('dt_jenis');
    }
    function buat_kode()
    {
        $this->db->select('RIGHT(dt_jenis.kd_jenis,3) as kode', FALSE);
		  $this->db->order_by('kd_jenis','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('dt_jenis');      //cek dulu apakah ada sudah ada kode di tabel.    
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
		  $kodejadi = "J".$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kodejadi;  
    }
    function simpan(){
        $data=array('kd_jenis'=>  $this->input->post('kode'),
            'nm_jenis'=>  $this->input->post('nama'));
        $this->db->insert('dt_jenis',$data);
    }
    function edit()
    {
        $data=array('kd_jenis'=>  $this->input->post('kode'),
            'nm_jenis'=>  $this->input->post('nama'));
        $this->db->where('kd_jenis',  $this->input->post('kode'));
        $this->db->update('dt_jenis',$data);
    }
    function get_one($id){
        $param=array('kd_jenis'=>$id);
        return $this->db->get_where('dt_jenis',$param);
    }
    function hapus($id)
       {
        $this->db->where('kd_jenis',$id);
        $this->db->delete('dt_jenis');
       }
}
?>
