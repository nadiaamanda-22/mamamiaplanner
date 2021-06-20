<?php
class Menu extends CI_controller
{

   public function __construct()
   {
      parent::__construct();
      $this->load->model('Resep_Model');
   }


   public function index()
   {
      $data['result'] = $this->Resep_Model->F_getAllResep();
      $data['resep'] = $data['result']['data'];

      $this->load->view('templates/header.php');
      $this->load->view('frontend/menu/menu.php', $data);
      $this->load->view('templates/footer.php');
   }


}
