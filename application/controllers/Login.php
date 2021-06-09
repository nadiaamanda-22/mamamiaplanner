<?php 
    class Login extends CI_controller{
        public function index (){
            $this->load->view('frontend/home/login.php');
        }
    }