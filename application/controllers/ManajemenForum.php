<?php 
class ManajemenForum extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ManajemenForum_Model');
    }

    public function index(){
        $data['title'] = 'Manajemen Forum';
        $this->load->view('backend/templates/header.php', $data);
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/forum/index', $data);
        $this->load->view('backend/templates/footer');
    }
}