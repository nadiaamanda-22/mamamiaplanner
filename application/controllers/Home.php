<?php 
    class Home extends CI_controller{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('token')) {
            $allowed = ['index'];
            if (!in_array($this->router->fetch_method(), $allowed)) {
                redirect('auth');
            }
        }


    }
        public function index (){
        $this->load->view('templates/header');
        $this->load->view('frontend/home/index');
        $this->load->view('templates/footer');
        }
    }