<?php

namespace Elena\PhpOopProof\models;

class ImagePost extends Post implements IPost{

    public function __construct(private string $mensaje, private string $imagen) {
        parent::__construct($mensaje);
    }


    public function getMensajeImagePost():string {
        return $this->getMensaje();
    }

    public function getImagen():string {
        return $this->imagen;
    }


    public function saludar():string {
        return $this->saludo();
    }

    public function toString():string {
        $info = "Id: " . $this->getId() . "\n";
        $info .= "Mensaje: " . $this->getMensaje() . "\n";
        $info .= "Imágenes: " . $this->imagen . "\n";
        $info .= "Likes: " . count($this->getLikes()) . "\n \n";

        return $info;
    }
}
