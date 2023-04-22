<?php

require 'vendor/autoload.php';

class Post{

    private string $id;

    public function saludo() {
        return "Hola";
    }

    public function getId():string {
        return $this->id;
    }

    public function setId(string $id) {
        $this->$id = $id;
    }


}

$obj = new Post;

// var_dump($obj);

echo $obj->getId();
echo $obj->saludo();
