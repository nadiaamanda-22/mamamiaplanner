<?php
class Detail extends CI_controller
{

   public function index()
   {
      $data['tittle'] = "Halaman Detail";

      $this->load->view('templates/header.php');
      $this->load->view('frontend/detail/index.php', $data);
      $this->load->view('templates/footer.php');
   }
}
