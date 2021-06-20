<?php

use GuzzleHttp\Client;

class Resep_Model extends CI_Model
{

    public function F_getAllResep()
    {
        $client = new Client();
        $response = $client->request('GET', 'localhost:3000/resep/');


        $result = json_decode($response->getBody()->getContents(), TRUE);

        return $result;
    }
}
