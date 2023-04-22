<?php

require 'vendor/autoload.php';

use Elena\PhpOopProof\Post;


$obj = new Post("PRUEBA");

echo $obj->getMensaje();
