<?php 
use App\Controller\BlogController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('blog_index', '/') -> controller([BlogController::class, 'index']);

    $routes->add('blog_post', '/articles/{slug}') -> controller([BlogController::class, 'show']);
};