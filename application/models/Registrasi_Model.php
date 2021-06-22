<?php

use GuzzleHttp\Client;

class Registrasi_Model extends CI_Model
{
    public function registrasiUser($data)
    {
        $client = new Client();
        $response = $client->request('POST', 'localhost:3000/user/', ['form_params' => $data]);
    }
}
