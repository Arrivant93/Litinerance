<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('home', new Route('/home', [
    '_controler' => ''
]));
$routes->add('bye', new Route('/bye'));

return $routes;
