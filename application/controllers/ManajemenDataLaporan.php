<?php
class ManajemenDataLaporan extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ManajemenDataLaporan_Model');
    }

    public function index(){
        $data['title'] = 'Manajemen Data Laporan';
        $this->load->view('backend/templates/header.php', $data);
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/datalaporan/index', $data);
        $this->load->view('backend/templates/footer');
    }
}