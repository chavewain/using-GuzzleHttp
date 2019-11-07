<?php

namespace App\Repositories;

use GuzzleHttp\Client;


class GuzzleHttpRequest{

    public function __construct()
    {

        $this->client = new Client([

            'base_uri' => 'https://jsonplaceholder.typicode.com',
            'timeout'  => 2.0,
        ]);
    }

    public function get($url){

        $response = $this->client->request('GET', $url);
        return  json_decode($response->getBody()->getContents());
    }

}
