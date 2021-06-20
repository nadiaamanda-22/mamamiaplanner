<?php

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('backend/templates/header.php');
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/admin/index');
        $this->load->view('backend/templates/footer');
    }
}
