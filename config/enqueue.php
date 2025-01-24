<?php

return [
    'admin' => [
        'scripts' => [
            [
                'handle' => 'reviewx-admin-js', 'src' => 'resources/assets/js/admin.js', 'deps' => [], 'ver' => false, 'in_footer' => false, 'attributes' =>
                [
                    'async' => 'async',
                    'data-x' => 'test'
                ],
            ],
            [
                'handle' => 'reviewx-user-js', 'src' => 'resources/assets/js/user.js', 'deps' => ['jquery'], 'ver' => false, 'in_footer' => false, 'attributes' =>
                [
                    'async' => 'async',
                    'data-y' => 'tx'
                ],
            ],
        ],
        'styles' => [
            ['handle' => 'reviewx-admin-css', 'src' => 'resources/assets/css/admin.css', 'deps' => [], 'ver' => false, 'media' => 'all', 'attributes' =>
                [
                    'async' => 'async',
                    'data-y' => 'tx'
                ],
            ],
        ],
        'localize_scripts' => [
            [
                'handle' => 'reviewx-user-js',
                'objectName' => 'user',
                'data' => [
                    'is_admin' => true,
                ],
            ],
        ],

    ],
    'frontend' => [
        'scripts' => [
            ['handle' => 'reviewx-admin-script', 'src' => 'resources/assets/js/admin.js', 'deps' => [], 'ver' => false, 'in_footer' => true],
        ],
        'styles' => [
            ['handle' => 'reviewx-admin-style', 'src' => 'resources/assets/css/admin.css', 'deps' => [], 'ver' => false, 'media' => 'all'],
        ]
    ]
];
