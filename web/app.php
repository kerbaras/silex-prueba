<?php

require_once __DIR__.'/../vendor/autoload.php'; 

$app = new Silex\Application(); 

function wait(int $ms){
    $start = microtime(true);
    while((microtime(true) - $start)*1000 < $ms) { continue; }
}

$app->get('/test', function() {
    wait(5);
    return 'Hola Matias!'; 
}); 

$app->run();

