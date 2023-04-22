<?php

require 'vendor/autoload.php';

class Post{

    private string $id;
    private string $message;


    // Se pueden ahorrar líneas de código escribiendo el alcance de la variable en el constructor, y se evita declarar la propiedad más arriba.
    // public function __construct(private string $message) {
    public function __construct(string $message) {
        $this->id = uniqid();
        $this->message = $message;
        print_r("Se creó un nuevo objeto Post \n");

    }



    public function saludo() {
        return "Hola";
    }

    public function getId():string {
        return $this->id;
    }

    public function getMessage():string {
        return $this->$message;
    }

    public function setId(string $id) {
        $this->$id = $id;
    }

    public function setMessage(string $message) {
        $this->$message = $message;
    }

}

$obj = new Post("Holaaaaaa");
