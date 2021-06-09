<?php
class Menu extends CI_controller
{
   public function index()
   {
      $this->load->view('templates/header.php');
      $this->load->view('frontend/menu/menu.php');
      $this->load->view('templates/footer.php');
   }
}
