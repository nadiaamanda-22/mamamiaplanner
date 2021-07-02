<?php
class ManajemenBahan extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ManajemenBahan_Model');
    }

    public function index(){
        $data['title'] = 'Manajemen Bahan';
        $this->load->view('backend/templates/header.php', $data);
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/bahan/index', $data);
        $this->load->view('backend/templates/footer');
    }
}