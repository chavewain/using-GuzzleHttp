<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class Posts{


    public function __construct()
    {

        $this->client = new Client([

            'base_uri' => 'https://jsonplaceholder.typicode.com',
            'timeout'  => 2.0,
        ]);
    }

    public function all(){

        return $this->get('posts');
    }

    public function find($id){

        return $this->get("posts/{$id}");

    }

    public function get($url){

        $response = $this->client->request('GET', $url);
        return  json_decode($response->getBody()->getContents());
    }
}
