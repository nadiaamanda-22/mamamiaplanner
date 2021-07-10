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
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'Email harus diisi !!', 'valid_email' => 'Format email salah !!']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'Password harus diisi !!']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('frontend/login/index');
        } else {

            $data = [
                'email_user' => $this->input->post('email'),
                'password_user' => $this->input->post('password')
            ];

            $result = $this->Auth_Model->loginUser($data);

            if ($result['success']) {
                $data = $result['data'];
                $data_session = [
                    'id_user' => $data['id_user'],
                    'role_id' => $data['role_id'],
                    'username' => $data['username'],
                    'token' => $data['token']
                ];
                $this->session->set_userdata($data_session);
                if ($data['role_id'] == 11) {
                    redirect('admin');
                } else {

                    redirect('home');
                }
            } else {
                $this->session->set_flashdata('l_error', 'Email atau password salah !!');
                $this->load->view('frontend/login/index');
            }
        }
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
                'full_name' => 'mamamia-' . uniqid(),
                'foto_user' => 'default.jpg',
                'role_id' => 12,
                'is_active' =>  date('j M Y')
            ];
            $result = $this->Auth_Model->registrasiUser($data);

            if ($result['status'] == 400) {
                $this->session->set_flashdata('error', 'Email sudah digunakan !!, Silahkan gunakan email yang berbeda !!');
                $this->load->view('frontend/registrasi/index');
            } else {
                $this->session->set_flashdata('success', 'Registrasi berhasil !!, Silahkan Login');
                $this->load->view('frontend/registrasi/index');
            }
        }


        // if ($this->form_validation->run() == FALSE) {
        //     
        // } else {
        //     redirect('Auth/index');
        // }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth', 'refresh');
    }
}
