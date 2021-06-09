<?php 
    class Home extends CI_controller{
        public function index (){
            $this->load->view('templates/header.php');
            $this->load->view('frontend/home/index.php');
            $this->load->view('templates/footer.php');
        }
    }