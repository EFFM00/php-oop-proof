<?php

namespace Elena\PhpOopProof\models;

use Elena\PhpOopProof\utils\UUID;

class Post{

    private string $id;
    private string $mensaje;
    private array $likes;

    public function __construct(string $mensaje) {
        $this->id = UUID::generate();
        $this->mensaje = $mensaje;
    }

    protected function saludo():string {
        return "Hi";
    }

    public function getMensaje():string {
        return $this->mensaje;
    }


    public function getId():string {
        return $this->id;
    }


    public function setMensaje(string $mensaje) {
        $this->$mensaje = $mensaje;
    }

    public function setId(string $id) {
        $this->$id = $id;
    }

}
