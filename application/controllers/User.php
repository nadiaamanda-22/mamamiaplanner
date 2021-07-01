<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model');
    }

    public function index()
    {
        $data['title'] = 'Manajemen User';

        $data['results'] = $this->User_Model->B_getAllUser();
        $data['users'] = $data['results']['data'];

        $this->load->view('backend/templates/header.php', $data);
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/user/index', $data);
        $this->load->view('backend/templates/footer');
    }
}
