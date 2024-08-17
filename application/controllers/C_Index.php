<?php

function debug($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die;
}

class C_Index extends CI_Controller 
{
    function __construct() 
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('html');

        $this->load->library('session');
        $this->load->library('form_validation');
        // $this->load->library('encrypt');

        // $this->load->model('M_Checkout');
    }

    public function index() {
        $data['tempValue'] = $this->session->flashdata('value');
        $data['error'] = $this->session->flashdata('errors');
        $data['success'] = $this->session->flashdata('success');

        $this->load->view('template/V_Header');
        $this->load->view('V_Index', $data);
        $this->load->view('template/V_Footer');
    }
}