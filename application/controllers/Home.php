<?php

class Home extends CI_Controller{
    
    function index()
    {
         $this->template->load('template1','view_home');
    }
}
?>
