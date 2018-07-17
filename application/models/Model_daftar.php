<?php

class Model_daftar extends CI_Model{
    
    function buat_kode()
    {
        $this->db->select('RIGHT(formulir.no_form,3) as kode', FALSE);
		  $this->db->order_by('no_form','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('formulir');      //cek dulu apakah ada sudah ada kode di tabel.    
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
		  $kodejadi = "F".$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kodejadi;  
    }
    function get_one($id)
    {
        $query="select a.*,b.nm_kursus,c.nm_jenis,d.nm_lokasi 
            from formulir as a, dt_kursus as b, dt_jenis as c,dt_lokasi as d
            where a.kd_kursus=b.kd_kursus and b.kd_jenis=c.kd_jenis and a.tempat_kursus=d.kd_lokasi and a.no_form='$id'";
        return $this->db->query($query);
    }
    function tampil_data()
    {
        $query="select a.*,b.nm_kursus,c.nm_jenis,d.nm_lokasi 
            from formulir as a, dt_kursus as b, dt_jenis as c,dt_lokasi as d
            where a.kd_kursus=b.kd_kursus and b.kd_jenis=c.kd_jenis and a.tempat_kursus=d.kd_lokasi";
         return $this->db->query($query);
    }
}
?>
