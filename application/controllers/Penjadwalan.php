<?php 
    class Penjadwalan extends CI_controller{


    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('token')) {
            $allowed = [];
            if (!in_array($this->router->fetch_method(), $allowed)) {
                redirect('auth');
            }
        }
    }
        public function index (){
            $this->load->view('templates/header.php');
        $this->load->view('frontend/penjadwalan/index.php');
            $this->load->view('templates/footer.php');
        }
    }