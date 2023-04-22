<?php

namespace Elena\PhpOopProof;

use Elena\PhpOopProof\utils\UUID;

class Post{

    private string $id;
    private string $mensaje;

    public function __construct(string $mensaje) {
        $uuid = new UUID;
        $this->id = $uuid->generate();
        $this->mensaje = $mensaje;
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
