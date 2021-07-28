<?php
class Request extends CI_controller
{

   public function index()
   {
      $data['tittle'] = "Halaman Request";

      $this->load->view('templates/headerforum.php');
      $this->load->view('frontend/forum/request.php');
      $this->load->view('templates/footerforum.php');
   }
}
