<?php
class Registrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Registrasi_Model');
    }

    public function index()
    {
        $this->load->view('frontend/registrasi/index');
    }

    public function daftar()
    {

        var_dump($this->input->post('username'));
        die;

        // $this->form_validation->set_rules('username', 'Username', 'required|trim');

        // var_dump($this->input->post('username'));
        // die;

        // if ($this->form_validation->run() == FALSE) {
        //     $this->load->view('frontend/registrasi/index');
        // } else {
        //     echo 'okk';
        //     //     // $email = $this->input->post('email_user');
        //     //     // $data = [
        //     //     //     'username' => $this->input->post('name'),
        //     //     //     'fullname' => uniqid(),
        //     //     //     'password_user' => $this->input->post('password'),
        //     //     //     'foto_user' => 'default.jpg',
        //     //     //     'role_id' => 12,
        //     //     //     'is_active' => 1,
        //     //     //     'created_at' => date('d F Y'),
        //     //     //     'email_user' => $this->input->post('email')
        //     //     // ];
        //     //     // var_dump($data);
        //     //     // die;
        // }


        // $result =  $this->Registrasi_Model->registrasiUser($data);
    }
}
