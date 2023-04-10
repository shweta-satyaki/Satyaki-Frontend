<?php

require __DIR__ . '/php/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$url = 'static/data/clients.json';


$loader = new FilesystemLoader(__DIR__ . '/');
$twig = new Environment($loader);

//read json file from url in php
$readJSONFile = file_get_contents($url);

$obj = json_decode($readJSONFile); 

// print_r($obj->logo[0]->path); // display contents

echo $twig->render('home.html', ['logos' => $obj->logo, "testim" => $obj->Testimonials]);
?>
