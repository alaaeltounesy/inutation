<?php
require __DIR__."/vendor/autoload.php";
$klein = new \Klein\Klein();

$klein->respond('GET', "/", function ($request) {

    require_once __DIR__ . "/home.php";
});
$klein->respond('GET', "/about", function ($request) {

    require_once __DIR__ . "/about.php";
});


$klein->dispatch();
