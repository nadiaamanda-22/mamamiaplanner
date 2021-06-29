<?php 
    class Penjadwalan extends CI_controller{
        public function index (){
            $this->load->view('templates/header.php');
            $this->load->view('frontend/penjadwalan/index.php');
            $this->load->view('templates/footer.php');
        }
    }