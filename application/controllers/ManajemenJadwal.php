<?php
class ManajemenJadwal extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ManajemenJadwal_Model');
    }

    public function index(){
        $data['title'] = 'Manajemen Jadwal';
        $this->load->view('backend/templates/header.php', $data);
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/jadwal/index', $data);
        $this->load->view('backend/templates/footer');
    }
}