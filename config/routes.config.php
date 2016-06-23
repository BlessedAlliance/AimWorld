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
                'action'        => 'index'
            ]
        ],
        'may_terminate' => true,
        'child_routes'  => [
            /**
             * AIM Wellness Advisory Board 
             */
            'advisory-board'    => [
                'type'      => Literal::class,
                'options'   => [
                    'route'     => '/aim-wellness-advisory-board',
                    'defaults'  => [                       
                        'action'        => 'advisory-board'
                    ]
                ]
            ],
            /**
             * About Marketing Plan
             */
            'marketing-plan'    => [
                'type'      => Literal::class,
                'options'   => [
                    'route'     => '/marketing-plan',
                    'defaults'  => [
                        'controller'    => Controller\MarketingPlanController::class,
                        'action'        => 'index'
                    ]
                ],
                'may_terminate' => true,
                'child_routes'  => [
                    'retailing'             => [
                        'type'      => Literal::class,
                        'options'   => [
                            'route'     => '/retailing',
                            'defaults'  => [
                                'action'    => 'retailing'
                            ]
                        ]
                    ],
                    'direct-referral-bonus' => [
                        'type'      => Literal::class,
                        'options'   => [
                            'route'     => '/direct-referral-bonus',
                            'defaults'  => [
                                'action'    => 'direct-referral-bonus'
                            ]
                        ]
                    ],
                    'matched-sales-bonus'   => [
                        'type'      => Literal::class,
                        'options'   => [
                            'route'     => '/matched-sales-bonus',
                            'defaults'  => [
                                'action'    => 'matched-sales-bonus'
                            ]
                        ]
                    ],
                    'unilevel-bonus'        => [
                        'type'      => Literal::class,
                        'options'   => [
                            'route'     => '/unilevel-bonus',
                            'defaults'  => [
                                'action'    => 'unilevel-bonus'
                            ]
                        ]
                    ],
                    'stairstep-bonus'       => [
                        'type'      => Literal::class,
                        'options'   => [
                            'route'     => '/stairstep-bonus',
                            'defaults'  => [
                                'action'    => 'stairstep-bonus'
                            ]
                        ]
                    ],
                    'double-income'         => [
                        'type'      => Literal::class,
                        'options'   => [
                            'route'     => '/doubling-your-income',
                            'defaults'  => [
                                'action'    => 'double-income'
                            ]
                        ]
                    ],
                    'royalty-income'        => [
                        'type'      => Literal::class,
                        'options'   => [
                            'route'     => '/royalty-income',
                            'defaults'  => [
                                'action'    => 'royalty-income'
                            ]
                        ]
                    ]
                ]
            ],
            /**
             * About Products
             */            
            'products'          => [
                'type'      => Literal::class,
                'options'   => [
                    'route'     => '/product',
                    'defaults'  => [
                        'controller'    => Controller\ProductController::class
                    ]
                ],
                'may_terminate' => false,
                'child_routes'  => [
                    'global-package'    => [
                        'type'      => Literal::class,
                        'options'   => [
                            'route'     => '/global-package',
                            'defaults'  => [                                
                                'action'    => 'global-package'
                            ]
                        ]
                    ],
                    'i-protect'         => [
                        'type'      => Literal::class,
                        'options'   => [
                            'route'     => '/i-protect-24-7',
                            'defaults'  => [
                                'action'    => 'i-protect'
                            ]
                        ]
                    ],
                    'i-protect-home'    => [
                        'type'      => Literal::class,
                        'options'   => [
                            'route'     => '/i-protect-home',
                            'defaults'  => [
                                'action'    => 'i-protect-home'
                            ]
                        ]
                    ],
                    'careleaf'          => [
                        'type'      => Literal::class,
                        'options'   => [
                            'route'     => '/careleaf',
                            'defaults'  => [
                                'action'        => 'careleaf'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
