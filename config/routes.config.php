<?php

/**
 * Most of the routing definitions will be done in module configuration files.
 *
 * @see https://zendframework.github.io/zend-router/routing/
 */

use Zend\Router\Http\Literal;
use AimWorld\Controller;

return [
    'aim-world' => [
        'type'      => Literal::class,
        'options'   => [
            'route'         => '/aim-world',
            'defaults'      => [
                'controller'    => Controller\PageController::class,
                'action'        => 'about'
            ]
        ],
        'may_terminate' => true,
        'child_routes'  => [    
            'marketing-plan'    => [
                'type'      => Literal::class,
                'options'   => [
                    'route'     => '/marketing-plan',
                    'defaults'  => [                            
                        'action'    => 'marketing-plan'
                    ]
                ]
            ],
            'products'          => [
                'type'      => Literal::class,
                'options'   => [
                    'route'     => '/products',
                    'defaults'  => [                            
                        'action'    => 'products'
                    ]
                ]
            ],
            'i-protect'         => [
                'type'      => Literal::class,
                'options'   => [
                    'route'     => '/product/i-protect-24-7',
                    'defaults'  => [
                        'action'    => 'i-protect'
                    ]
                ]
            ],
            'i-protect-home'    => [
                'type'      => Literal::class,
                'options'   => [
                    'route'     => '/product/i-protect-home',
                    'defaults'  => [
                        'action'    => 'i-protect-home'
                    ]
                ]
            ],
            'careleaf'          => [
                'type'      => Literal::class,
                'options'   => [
                    'route'     => '/product/careleaf',
                    'defaults'  => [
                        'action'        => 'careleaf'
                    ]
                ]
            ]
        ]
    ],
    'our-team'    => [
        'type'      => Literal::class,
        'options'   => [
            'route'     => '/our-team',
            'defaults'  => [
                'controller'    => Controller\PageController::class,
                'action'    => 'team'
            ]
        ]
    ]
];
