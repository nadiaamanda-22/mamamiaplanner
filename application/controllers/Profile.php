<?php
class Profile extends CI_controller
{
   public function __construct()
   {
      parent::__construct();


      if (!$this->session->userdata('token')) {
         $allowed = [];
         if (!in_array($this->router->fetch_method(), $allowed)) {
            redirect('auth');
         }
      }

      if ($this->session->userdata('role_id') == 11) {
         redirect('helper/index.html');
      }

      $this->load->model('Profile_Model');


   }

   public function index()
   {
      $data['tittle'] = "Halaman Profile";
      $data['results'] = $this->Profile_Model->getProfile();

      $data['profile'] = $data['results']['data'];

      $this->load->view('templates/header');
      $this->load->view('frontend/profile/profile', $data);
      $this->load->view('templates/footer');
   }

   public function pengaturan($id)
   {
      $data['tittle'] = "Pengaturan Akun";
      $data['results'] = $this->Profile_Model->getProfileByID($id);

      $data['profile'] = $data['results']['data'];
      $this->load->view('templates/header');
      $this->load->view('frontend/profile/pengaturan', $data);
      $this->load->view('templates/footer');
   }

   public function editProfile()

   {
      $id = $this->input->post('id_user');

      $data = [
         'id_user' => $this->input->post('id_user'),
         'username' => $this->input->post('username'),
         'full_name' => $this->input->post('full_name'),
         'email_user' => $this->input->post('email_user'),
         // 'password_user' => $this->input->post('password_user'),
         // 'foto_user' => $this->input->post('gambar_resep'),
         'role_id' => $this->input->post('role_id'),
         'is_active' => $this->input->post('is_active')
      ];


      if ($this->input->post('gambar_resep') != null) {
         $data['foto_user'] = $this->input->post('gambar_resep');
      }

      if ($this->input->post('password_user') != null) {
         $data['password_user'] = $this->input->post('password_user');
      }





      var_dump($data);
      die;
   }
}
