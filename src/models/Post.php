<?php

namespace Elena\PhpOopProof\models;

use Elena\PhpOopProof\utils\UUID;

class Post {

    private string $id;
    private string $mensaje;
    private array $likes;

    public function __construct(string $mensaje) {
        $this->id = UUID::generate();
        $this->mensaje = $mensaje;
        $this->likes = [];
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
        $this->mensaje = $mensaje;
    }

    public function setId(string $id) {
        $this->id = $id;
    }


    public function getLikes()
    {
        return $this->likes;
    }


    protected function checkIfUserLiked(User $user):bool {
        $found = array_filter(
            $this->likes,
            function(Like $like) use ($user) {
                return $like->getUser()->getId() == $user->getId();
            }
        );

        return count($found) == 1;
    }


    public function addLike(User $user) {
        
        if($this->checkIfUserLiked($user)) {
            $this->removeLike($user);
        } else {
            $like = new Like($user);
            array_push($this->likes, $like);
        }

        return $this;
    }

    public function removeLike(User $user) {
        $this->likes = array_filter(
            $this->likes,
            fn (Like $likes) => $likes->getUser()->getId() !== $user->getId()
        );
    }



}
