<?php

class Model_login extends CI_Model{
    
    function login($username,$password)
    {
        $check=  $this->db->get_where('admin',array('username'=>$username,'password'=>$password));
        if($check->num_rows()>0){
            
            return 1;
        }else
        {
            return 0;
        }
    }
}
?>