<?php

return [
    // Zend Framework Configuration
    'view_manager' => [
        'template_map' => [],
        'template_path_stack' => [
            'aim-world' => __DIR__ . '/../templates',
        ],
    ],

    // Zend Expressive Configuration
    'templates'     => [
        'layout'                    => "site/layout",
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
