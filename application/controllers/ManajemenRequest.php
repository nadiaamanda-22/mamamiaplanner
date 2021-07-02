<?php 
class ManajemenRequest extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ManajemenRequest_Model');
    }

    public function index(){
        $data['title'] = 'Manajemen Request';
        $this->load->view('backend/templates/header.php', $data);
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/request/index', $data);
        $this->load->view('backend/templates/footer');
    }
}