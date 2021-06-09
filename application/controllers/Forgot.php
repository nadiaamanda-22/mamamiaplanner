<?php 
    class Forgot extends CI_controller{
        public function index (){
            $this->load->view('frontend/home/forgot.php');
        }
    }