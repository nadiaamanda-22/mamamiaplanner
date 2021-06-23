<?php
class Auth extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_Model');
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->view('frontend/home/login.php');
    }
    public function registrasi()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim', ['required' => 'Username harus diisi !!']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'Email harus diisi !!', 'valid_email' => 'Format email salah !!']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', ['required' => 'Password harus diisi !!', 'matches' => 'Password tidak sama']);
        $this->form_validation->set_rules('password2', 'Password1', 'required|trim|matches[password1]', ['required' => 'password harus diisi !!', 'matches' => 'Password tidak sama']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('frontend/registrasi/index');
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'email_user' => $this->input->post('email'),
                'password_user' => md5($this->input->post('password')),
                'fullname' => 'mamamia-' . uniqid(),
                'foto_user' => 'default.jpg',
                'role_id' => 12,
                'is_active' =>  date('j M Y')
            ];
            $result = $this->Auth_Model->registrasiUser($data);

            if ($result['status'] == 400) {
                $this->session->set_flashdata('flashdata', 'Email sudah digunakan !!, Silahkan gunakan email yang berbeda !!');
                $this->load->view('frontend/registrasi/index');
            } else {
                $this->session->set_flashdata('flashdata', 'Registrasi berhasil !!, Silahkan Login');
                redirect('Auth');
            }
        }


        // if ($this->form_validation->run() == FALSE) {
        //     
        // } else {
        //     redirect('Auth/index');
        // }
    }
}
