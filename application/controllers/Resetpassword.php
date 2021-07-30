<?php
class Resetpassword extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_Model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        if ($email && $token) {
            $this->form_validation->set_rules('password1', 'Password1', 'required|trim|matches[password2]');
            $this->form_validation->set_rules('password2', 'Password2', 'required|trim|matches[password1]');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('frontend/forgot/resetpassword.php');
            } else {
                $data = [
                    'password_user' => md5($this->input->post('password1')),
                    'email_user' => $email
                ];
                $result = $this->Auth_Model->resetPassword($data);

                if ($result['status'] == 400) {
                    $this->session->set_flashdata('error', 'Email sudah digunakan !!, Silahkan gunakan email yang berbeda !!');
                    $this->load->view('frontend/registrasi/index');
                } else {
                    $this->session->set_flashdata('newpass', 'Password berhasil direset');
                    $this->load->view('frontend/forgot/resetpassword.php');
                }
            }
        }
    }
}
