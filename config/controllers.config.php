<?php

/**
 * We inform the application about controllers we expect to have in the application.
 *
 * @see https://zendframework.github.io/zend-mvc/quick-start/#create-a-route
 */

use Zend\ServiceManager\Factory\InvokableFactory;
use AimWorld\Controller;

return [
    'factories' => [
        Controller\MarketingPlanController::class   => InvokableFactory::class,
        Controller\ProductController::class        => InvokableFactory::class,
        Controller\PageController::class            => InvokableFactory::class
    ]
];