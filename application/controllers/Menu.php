<?php
class Menu extends CI_controller
{

   public function __construct()
   {
      parent::__construct();

      if (!$this->session->userdata('token')) {
         $allowed = ['index'];
         if (!in_array($this->router->fetch_method(), $allowed)) {
            redirect('auth');
         }
      }

      if ($this->session->userdata('role_id') == 11) {
         redirect('helper/index.html');
      }

      $this->load->model('Resep_Model');

   }


   public function index()
   {
      $data['result'] = $this->Resep_Model->F_getAllResep();
      $data['reseps'] = $data['result']['data'];

      $this->load->view('templates/header.php');
      $this->load->view('frontend/menu/menu.php', $data);
      $this->load->view('templates/footer.php');
   }

   public function details($id_resep)
   {
      $data['result'] = $this->Resep_Model->F_getResepByID($id_resep);
      $data['resep'] = $data['result']['data'][0];
      $data['tittle'] = "Halaman Detail";

      $this->load->view('templates/header');
      $this->load->view('frontend/menu/detail', $data);
      $this->load->view('templates/footer');
   }


}
