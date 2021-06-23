<?php

use GuzzleHttp\Client;

class Auth_Model extends CI_Model
{
    public function registrasiUser($data)
    {
        $client = new Client();
        $response = $client->request('POST', 'localhost:3000/sign-up/', ['form_params' => $data]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result;
    }
}
