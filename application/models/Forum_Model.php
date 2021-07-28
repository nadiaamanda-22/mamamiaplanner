<?php

use GuzzleHttp\Client;

class Forum_Model extends CI_Model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:3000/'
        ]);
    }

    public function F_getAllForum()
    {
        $response = $this->_client->request('GET', 'post/s');
        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result;
    }
}
