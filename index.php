<?php

require 'vendor/autoload.php';

use Elena\PhpOopProof\models\Post;
use Elena\PhpOopProof\models\ImagePost;
use Elena\PhpOopProof\models\User;


$elena = new User("Elena", "effm00", "effm@fakemail.com", "pass123");
$maria = new User("María", "maria123", "maria@fakemail.com", "pass456");
$juanita = new User("Juanita", "juanita00", "juanita@fakemail.com", "pass789");


$elenaPost= new ImagePost("Mi primer post wii", "img001.jpg");
$mariaPost= new ImagePost("Aprendiendo poo en php", "img002.jpg");
$juanitaPost= new ImagePost("Domingo de PHP", "img003.jpg");


$elena->publish($elenaPost);
$maria->publish($mariaPost);
$juanita->publish($juanitaPost);
$juanita->publish($juanitaPost);


$elenaPost->addLike($maria);
$mariaPost->addLike($juanita);
$mariaPost->addLike($elena);
$mariaPost->addLike($maria);
$mariaPost->addLike($maria);
$juanitaPost->addLike($elena);


$elena->addFollower($juanita);
$juanita->addFollower($elena);
$juanita->addFollower($maria);


print_r(User::showProfile($elena));
print_r(User::showProfile($maria));
print_r(User::showProfile($juanita));

print_r("_________________\n\n");

print_r($elenaPost->toString());
print_r($mariaPost->toString());
print_r($juanitaPost->toString());
