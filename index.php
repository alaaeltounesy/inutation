<?php
require 'vendor/autoload.php';
$klein = new \Klein\Klein();

$klein->respond('GET', "/", function ($request) {

    require_once  "home.php";
});
$klein->respond('GET', '/Services', function () {
    require 'Services.php';
});


$klein->dispatch();
