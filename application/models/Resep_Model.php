<?php

use GuzzleHttp\Client;

class Resep_Model extends CI_Model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:3000/'
        ]);
    }

    public function F_getAllResep()
    {
        $response = $this->_client->request('GET', 'resep/s');
        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result;
    }

    public function F_getResepByID($id_resep)
    {
        $response = $this->_client->request('GET', 'resep/s/' . $id_resep);
        $result = json_decode($response->getBody()->getContents(), TRUE);
        return $result;
    }

}
