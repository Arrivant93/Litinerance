<?php
// import components
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

// require l'autoloader
require __DIR__ . '/../vendor/autoload.php';

// on stock les superglobals $POST, $GET, $SESSION etc dans un seul objet
$request = Request::createFromGlobals();

// require des différentes routes
$routes = require __DIR__ . '/../src/route/routes.php';

$context = new RequestContext();
$context->fromRequest($request);

// on vérifie que chaque route match avec un URL
$urlMatcher = new UrlMatcher($routes, $context);

try {
    // resultat contient le nom de la route
    $resultat = $urlMatcher->match($request->getPathInfo());
    ob_start();
    include __DIR__ . '/../src/pages/' . $resultat['_route'] . '.php';
    $response = new Response(ob_get_clean());
} catch (Exception $e) {
    $response = new Response("", 404);
    include __DIR__ . '/../src/pages/404.php';
}

$response->send();
