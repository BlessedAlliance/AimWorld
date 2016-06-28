<?php

return [
    // Zend Framework Configuration
    'view_manager' => [
        'template_map' => [
            'page/section/about'            => __DIR__ . '/../templates/aim-world/page/section/about.phtml',
            'page/section/products'         => __DIR__ . '/../templates/aim-world/page/section/products.phtml',
            'page/section/ways-to-earn'     => __DIR__ . '/../templates/aim-world/page/section/ways-to-earn.phtml',
            'page/section/advisory-board'   => __DIR__ . '/../templates/aim-world/page/section/advisory-board.phtml',
        ],
        'template_path_stack' => [
            'aim-world' => __DIR__ . '/../templates',
        ]
    ],

    // Zend Expressive Configuration
    'templates'     => [        
        'map'       => [],
        'paths'     => [
            'aim-world'  => [__DIR__ . '/../templates']
        ]
    ],

    /**
     * Zend View Helpers
     */
    'view_helpers'  => [
        'aliases'       => [],
        'invokables'    => [],
        'factories'     => []
    ]
];
