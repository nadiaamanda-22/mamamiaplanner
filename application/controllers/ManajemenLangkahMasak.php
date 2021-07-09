<?php
class ManajemenLangkahMasak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Manajemen Langkah Memasak';
        // $data['results_bahan'] = $this->ManajemenBahan_Model->B_getAllBahan();
        // $data['bahans'] = $data['results_bahan']['data'];

        $this->load->view('backend/templates/header.php', $data);
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/langkahmasak/index', $data);
        $this->load->view('backend/templates/footer');
    }
}
