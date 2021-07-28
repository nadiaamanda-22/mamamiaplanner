<?php
class Forum extends CI_controller
{

   public function index()
   {
      $data['tittle'] = "Halaman Forum";

      $this->load->view('templates/headerforum.php');
      $this->load->view('frontend/forum/index.php');
      $this->load->view('templates/footerforum.php');
   }
}
