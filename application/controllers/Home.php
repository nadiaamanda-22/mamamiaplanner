<?php 
    class Home extends CI_controller{
    public function __construct()
    {
        parent::__construct();
    }
        public function index (){
        $this->load->view('templates/header');
        $this->load->view('frontend/home/index');
        $this->load->view('templates/footer');
        }
    }