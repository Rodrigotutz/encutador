<?php

use CoffeeCode\Router\Router;

$router = new Router(getenv("APP_URL"));


$router->namespace("Rodrigotutz\Controllers");
$router->group(null);
$router->get("/", "Web:index", "web.index");
$router->post("/", "Web:index", "web.index");
$router->get('/erro', "Web:error", 'web.error');

$router->dispatch();

if($router->error()) {
    $router->redirect('web.error');
}