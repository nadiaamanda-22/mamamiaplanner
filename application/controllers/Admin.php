<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('token')) {
            $allowed = [];
            if (!in_array($this->router->fetch_method(), $allowed)) {
                redirect('auth');
            }
        }

        if ($this->session->userdata('role_id') != 11) {
            redirect('helper/index.html');
        }
    }
    public function index()
    {
        $this->load->view('backend/templates/header.php');
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/admin/index');
        $this->load->view('backend/templates/footer');
    }
}
