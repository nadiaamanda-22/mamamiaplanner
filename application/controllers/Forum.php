<?php
class Forum extends CI_Controller
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


        $this->load->model('Forum_Model');
    }

    public function index()
    {
        $data['result'] = $this->Forum_Model->F_getAllForum();

        $data['forums'] = $data['result']['data'];
        $this->load->view('frontend/template_forum/header');
        $this->load->view('frontend/forum/index', $data);
        $this->load->view('frontend/template_forum/footer');
    }
}
