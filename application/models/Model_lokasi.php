<?php

class Model_lokasi extends CI_Model{
    
    function tampil_data()
    {
        return $this->db->get('dt_lokasi');
    }
    function buat_kode()
    {
        $this->db->select('RIGHT(dt_lokasi.kd_lokasi,3) as kode', FALSE);
		  $this->db->order_by('kd_lokasi','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('dt_lokasi');      //cek dulu apakah ada sudah ada kode di tabel.    
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
        $data=array('kd_lokasi'=>  $this->input->post('kode'),
            'nm_lokasi'=>  $this->input->post('nama'));
        $this->db->insert('dt_lokasi',$data);
    }
    function edit()
    {
        $data=array('kd_lokasi'=>  $this->input->post('kode'),
            'nm_lokasi'=>  $this->input->post('nama'));
        $this->db->where('kd_lokasi',  $this->input->post('kode'));
        $this->db->update('dt_lokasi',$data);
    }
    function get_one($id){
        $param=array('kd_lokasi'=>$id);
        return $this->db->get_where('dt_lokasi',$param);
    }
    function hapus($id)
       {
        $this->db->where('kd_lokasi',$id);
        $this->db->delete('dt_lokasi');
       }
}
?>
