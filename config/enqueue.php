<?php

return [
    'admin' => [
        'scripts' => [
            [
                'handle' => 'reviewx-admin-js', 'src' => 'assets/js/admin.js', 'deps' => [], 'ver' => false, 'in_footer' => false, 'attributes' =>
                [
                    'async' => 'async',
                    'data-x' => 'test'
                ],
            ],
            [
                'handle' => 'reviewx-user-js', 'src' => 'assets/js/user.js', 'deps' => [], 'ver' => false, 'in_footer' => false, 'attributes' =>
                [
                    'async' => 'async',
                    'data-y' => 'tx'
                ],
            ],
        ],
        'styles' => [
            ['handle' => 'reviewx-admin-css', 'src' => 'assets/css/admin.css', 'deps' => [], 'ver' => false, 'media' => 'all', 'attributes' =>
                [
                    'async' => 'async',
                    'data-y' => 'tx'
                ],
            ],
        ]

    ],
    'frontend' => [
        'scripts' => [
            ['handle' => 'reviewx-admin-script', 'src' => 'assets/js/admin.js', 'deps' => [], 'ver' => false, 'in_footer' => true],
        ],
        'styles' => [
            ['handle' => 'reviewx-admin-style', 'src' => 'assets/css/admin.css', 'deps' => [], 'ver' => false, 'media' => 'all'],
        ]
    ]
];
