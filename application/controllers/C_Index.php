<?php

class C_Index extends CI_Controller 
{
    // public function __construct() 
    // {
    //     parent::__construct();
    //     $this->load->model('M_Index');
    // }

    public function index() {
        $this->load->view('V_Index');
    }
}