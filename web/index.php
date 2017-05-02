<?php

require_once __DIR__.'/../vendor/autoload.php'; 

$app = new Silex\Application(); 

$app->get('/', function() use($app) { 
    return 'home page';
}); 

$app->get('/hello/{name}', function($name) use($app) { 
    return 'Hello ' . $app->escape($name); 
}); 

$app->run(); 
