<?php 
class ManajemenResep extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ManajemenResep_Model');
    }

    public function index(){
        $data['title'] = 'Manajemen Resep';
        $this->load->view('backend/templates/header.php', $data);
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/resep/index', $data);
        $this->load->view('backend/templates/footer');
    }
}