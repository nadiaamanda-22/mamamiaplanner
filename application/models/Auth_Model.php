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


    public function loginUser($data)
    {
        $client = new Client();
        $response = $client->request('POST', 'localhost:3000/sign-in/', ['form_params' => $data]);

        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result;
    }

    public function sendEmail($email)
    {
        $client = new Client();
        $response = $client->request('POST', 'localhost:3000/forgotpassword/', ['form_params' => $email]);
        $result = json_decode($response->getBody()->getContents(), TRUE);
        return $result;
    }

    public function resetPassword($data)
    {
        $client = new Client();
        $response = $client->request('PUT', 'localhost:3000/resetpassword/', ['form_params' => $data]);
        $result = json_decode($response->getBody()->getContents(), TRUE);
        return $result;
    }
}
