<?php

use GuzzleHttp\Client;

class Profile_Model extends CI_Model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:3000/'
        ]);
    }

    public function getProfile()
    {
        $id = $this->session->userdata('id_user');
        $response = $this->_client->request('GET', 'user/p/' . $id);
        $result = json_decode($response->getBody()->getContents(), TRUE);
        return $result;
    }

    public function getProfileByID($id)
    {
        $response = $this->_client->request('GET', 'user/' . $id);
        $result = json_decode($response->getBody()->getContents(), TRUE);
        return $result;
    }
}
