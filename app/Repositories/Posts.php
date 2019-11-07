<?php

namespace App\Repositories;


use App\Repositories\GuzzleHttpRequest;

class Posts extends GuzzleHttpRequest{




    public function all(){

        return $this->get('posts');
    }

    public function find($id){

        return $this->get("posts/{$id}");

    }


}
