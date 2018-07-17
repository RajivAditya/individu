<?php
class Auth extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model(array('model_login'));
    }


    function login()
    {
        
        if(isset($_POST['submit']))
        {
            $username=  $this->input->post('username');
            $password=  $this->input->post('password');
            $hasil=  $this->model_login->login($username,$password);
            if($hasil==1)
            {
                $id=$username;
                $this->session->set_userdata(array('username'=>$id,'status_login'=>'oke'));
                redirect('admin');
            }
            else
            {
                echo "<script>alert('Login Gagal Cek username dan password')</script>";
                redirect('auth/login');
            }
                
        }
        else
        {
        $this->load->view('login');
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
?>
