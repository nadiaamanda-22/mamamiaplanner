<?php

use GuzzleHttp\Client;

class Penjadwalan_Model extends CI_Model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:3000/'
        ]);
    }

    public function F_getPenjadwalan()
    {
        $response = $this->_client->request('GET', 'jadwal/u/' . $this->session->userdata('id_user'));
        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result;
    }
}
