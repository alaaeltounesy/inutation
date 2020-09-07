<?php
require 'vendor/autoload.php';
$klein = new \Klein\Klein();

$klein->respond( "/", function ($request) {

    require_once  __DIR__.'/home.php';
});
$klein->respond('GET', '/[:page]/?', function ($request) {
    require __DIR__.'/'.$request->page.'.php';
});



$klein->dispatch();
