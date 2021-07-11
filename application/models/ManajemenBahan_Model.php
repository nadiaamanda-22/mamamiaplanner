<?php

use GuzzleHttp\Client;

class ManajemenBahan_Model extends CI_Model{

    private $_client;
    
    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:3000/'
        ]);
    }

    public function B_getAllBahan(){
        $response = $this->_client->request('GET', 'bahan/');
        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result;
    }

}