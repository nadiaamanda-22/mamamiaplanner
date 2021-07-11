<?php 

use GuzzleHttp\Client;

class ManajemenResep_Model extends CI_Model{

    private $_client;
    
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:3000/'
        ]);
    }

    public function B_getAllResep(){
        $response = $this->_client->request('GET', 'resep/');
        $result = json_decode($response->getBody()->getContents(), TRUE);
        return $result;
    }

}