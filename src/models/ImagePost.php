<?php

namespace Elena\PhpOopProof\models;

class ImagePost extends Post{

    public function __construct(string $mensaje, private string $imagen) {
        parent::__construct($mensaje);
    }


    public function getMensajeImagePost() {
        return $this->getMensaje();
    }


    public function saludar():string {
        return $this->saludo();
    }

}
