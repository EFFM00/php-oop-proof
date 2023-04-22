<?php

require 'vendor/autoload.php';

use Elena\PhpOopProof\models\Post;
use Elena\PhpOopProof\models\ImagePost;


$obj = new Post("PRUEBA");

$imagePost= new ImagePost("Fotos en la playa!!", "playa.jpg");

echo $obj->getMensaje();
echo $obj->getId();

echo $imagePost->saludar();
