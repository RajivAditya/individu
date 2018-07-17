<?php

class Model_kursus extends CI_Model{
    
    function tampil_data()
    {
        $query="select a.*,b.nm_jenis 
            from dt_kursus as a,dt_jenis as b 
            where a.kd_jenis=b.kd_jenis";
        return $this->db->query($query);
    }
    function tampil_detail($kode)
    {
        $query="select a.*,b.nm_unit 
            from dt_kursus_detail as a,dt_unit as b 
            where a.kd_unit=b.kd_unit and a.kd_kursus='$kode'";
        return $this->db->query($query);
    }
    function tampil_detail_temp($kode)
    {
        $query="select a.*,b.nm_unit 
            from dt_kursus_temp as a,dt_unit as b
            where a.kd_unit=b.kd_unit and a.kd_kursus='$kode'";
        return $this->db->query($query);
    }
    function buat_kode()
    {
        $this->db->select('RIGHT(dt_kursus.kd_kursus,3) as kode', FALSE);
		  $this->db->order_by('kd_kursus','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('dt_kursus');      //cek dulu apakah ada sudah ada kode di tabel.    
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
		  $kodejadi = "K".$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kodejadi;  
    }
    function simpan(){
        $data=array('kd_kursus'=>  $this->input->post('kode'),
            'nm_kursus'=>  $this->input->post('nama'),
            'kd_jenis'=>  $this->input->post('jenis'));
        $this->db->insert('dt_kursus',$data);
    }
    function simpan_detail($kode)
   {
       $query="insert into dt_kursus_detail select dt_kursus_temp.kd_detail,dt_kursus_temp.kd_kursus,dt_kursus_temp.kd_unit
           from dt_kursus_temp where dt_kursus_temp.kd_kursus='$kode'";
       $this->db->query($query);
   }
    function edit()
    {
        $data=array('kd_kursus'=>  $this->input->post('kode'),
            'nm_kursus'=>  $this->input->post('nama'),
            'kd_jenis'=>  $this->input->post('jenis'));
        $this->db->where('kd_kursus',  $this->input->post('kode'));
        $this->db->update('dt_kursus',$data);
    }
    function get_one($id){
        $query="select a.*,b.nm_jenis 
            from dt_kursus as a,dt_jenis as b 
            where a.kd_jenis=b.kd_jenis and a.kd_kursus='$id'";
        return $this->db->query($query);
    }
    function hapus($id)
       {
        $this->db->where('kd_kursus',$id);
        $this->db->delete('dt_kursus');
       }
       function get_unit($id)
       {
           $param=array('kd_unit'=>$id);
           return $this->db->get_where('dt_unit',$param);
       }
   function simpan_temp($kd_unit,$kd_kursus)
   {
       $data=array('kd_kursus'=>  $kd_kursus,
            'kd_unit'=>  $kd_unit);
        $this->db->insert('dt_kursus_temp',$data);
   }
   
   function hapus_det_temp($id)
   {
      $this->db->where('kd_detail',$id);
        $this->db->delete('dt_kursus_temp'); 
   }
   function hapus_all_temp($id)
   {
      $this->db->where('kd_kursus',$id);
        $this->db->delete('dt_kursus_temp'); 
   }
   function hapus_detail($id)
   {
      $this->db->where('kd_kursus',$id);
        $this->db->delete('dt_kursus_detail'); 
   }
   function simpan_det_temp($id)
   {
       $query="insert into dt_kursus_temp select dt_kursus_detail.kd_detail,dt_kursus_detail.kd_kursus,dt_kursus_detail.kd_unit
           from dt_kursus_detail where dt_kursus_detail.kd_kursus='$id'";
       $this->db->query($query);
   }
}
?>
