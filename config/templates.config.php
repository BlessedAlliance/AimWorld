<?php

return [
    // Zend Framework Configuration
    'view_manager' => [
        'template_map' => [
            'site/layout'               => __DIR__ . '/../templates/layout/default.phtml',
            'partial/header'            => __DIR__ . '/../templates/layout/partial/header.phtml',
            'partial/footer'            => __DIR__ . '/../templates/layout/partial/footer.phtml',
            'widget/banner/footer'      => __DIR__ . '/../templates/layout/widget/banner/footer.phtml',
            'template/navigation'       => __DIR__ . '/../templates/layout/template/navigation.phtml',
            'template/breadcrumbs'      => __DIR__ . '/../templates/layout/template/breadcrumbs.phtml',
        ],
        'template_path_stack' => [
            'aim-world' => __DIR__ . '/../templates',
        ]
    ],

    // Zend Expressive Configuration
    'templates'     => [        
        'map'       => [            
            'site/layout'               => __DIR__ . '/../templates/layout/default.phtml',
            'partial/header'            => __DIR__ . '/../templates/layout/partial/header.phtml',
            'partial/footer'            => __DIR__ . '/../templates/layout/partial/footer.phtml',
            'widget/banner/footer'      => __DIR__ . '/../templates/layout/widget/banner/footer.phtml',
            'template/navigation'       => __DIR__ . '/../templates/layout/template/navigation.phtml',
            'template/breadcrumbs'      => __DIR__ . '/../templates/layout/template/breadcrumbs.phtml',
        ],
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
