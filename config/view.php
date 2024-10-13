<?php

return [
    'enable_templating' => true,
    'template_path' => 'resources/views',
    'cache_path' => 'storage/cache/views',
    'cache_lifetime' => 0,
    'template_extension' => 'twig',
    'lexer' => [
        'tag_comment' => ['{#', '#}'],
        'tag_block' => ['{%', '%}'],
        'tag_variable' => ['{{', '}}'],
        'interpolation' => ['#{', '}'],
    ],

    'functions' => [
        '__' => function ($text, $domain = 'default') {
            return __($text, $domain);
        },
    ]
];
