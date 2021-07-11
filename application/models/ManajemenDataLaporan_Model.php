<?php 

use GuzzleHttp\Client;

class ManajemenDataLaporan_Model extends CI_Model{

    private $_client;
    
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:3000/'
        ]);
    }

}