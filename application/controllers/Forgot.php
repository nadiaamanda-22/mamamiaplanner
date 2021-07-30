<?php 
    class Forgot extends CI_controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_Model');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Email harus diisi !!']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('frontend/forgot/forgot.php');
        } else {
            $data = [
                'email' => $this->input->post('email')
            ];
            $result = $this->Auth_Model->sendEmail($data);


            if ($result['status'] == 400) {
                $this->session->set_flashdata('error', 'Email sudah digunakan !!, Silahkan gunakan email yang berbeda !!');
                $this->load->view('frontend/registrasi/index');
            } else {
                $this->session->set_flashdata('reset', 'Akses reset password dikirim');
                $this->load->view('frontend/forgot/forgot.php');
            }
        }
    }

    }