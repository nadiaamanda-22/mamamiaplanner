<?php 
class ManajemenResep extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ManajemenResep_Model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['title'] = 'Manajemen Resep';
        // $data['results'] = $this->ManajemenResep_Model->B_getAllResep();
        // $data['reseps']=$data['results']['data'];

        $this->load->view('backend/templates/header.php', $data);
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/resep/index', $data);
        $this->load->view('backend/templates/footer');
    }

    // public function tambahResep()
    // {

    //     $data = [
    //         'nama_resep' => $this->input->post('nama_resep'),
    //         'deskripsi_resep' => $this->input->post('deskripsi_resep'),
    //         'gambar_resep' => $this->input->post('gambar_resep'),
    //         'link_youtube' => $this->input->post('link_youtube'),
    //         'bahan' => '',
    //         'langkah_memasak' => '',
    //         'kalori' => $this->input->post('kalori')

    //     ];



    //     // var_dump($data);
    //     // die;


    //     // $this->form_validation->set_rules('nama_resep', 'Nama Resep', 'required|trim', ['required' => 'Nama resep harus diisi !!']);
    //     // $this->form_validation->set_rules('deskripsi_resep', 'Deskripsi Resep', 'required|trim', ['required' => 'Deskripsi resep harus diisi !!']);
    //     // $this->form_validation->set_rules('link_youtube', 'Link Youtube', 'required|trim', ['required' => 'Link Youtube harus diisi !!']);
    //     // $this->form_validation->set_rules('kalori', 'Kalori', 'required|trim', ['required' => 'Kalori harus diisi !!']);

    //     // if ($this->form_validation->run() == FALSE) {
    //     //     $array = [
    //     //         'nama_resep_error' => form_error('nama_resep'),
    //     //         'deskripsi_resep_error' => form_error('deskripsi_resep'),
    //     //         'link_youtube_error' => form_error('link_youtube_resep'),
    //     //         'kalori_error' => form_error('kalori')
    //     //     ];
    //     //     echo json_encode($array);
    //     // } else {
    //     // }
    // }
}