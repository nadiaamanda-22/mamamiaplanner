<?php 
    class Penjadwalan extends CI_controller{


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


        $this->load->model('Penjadwalan_Model');
    }
        public function index (){

        $data['result'] = $this->Penjadwalan_Model->F_getPenjadwalan();

        $data['jadwals'] = $data['result']['data'];
            $this->load->view('templates/header.php');
        $this->load->view('frontend/penjadwalan/index.php', $data);
            $this->load->view('templates/footer.php');
        }

    }
