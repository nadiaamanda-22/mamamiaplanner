<?php
class Profile extends CI_controller
{

   public function index()
   {
      $data['tittle'] = "Halaman Profile";

      $this->load->view('templates/header');
      $this->load->view('frontend/profile/profile', $data);
      $this->load->view('templates/footer');
   }

   public function pengaturan()
   {
      $data['tittle'] = "Pengaturan Akun";

      $this->load->view('templates/header');
      $this->load->view('frontend/profile/pengaturan', $data);
      $this->load->view('templates/footer');
   }
}
