<?php

return [
    'enable_templating' => true,
    'lexer' => [
        'tag_comment' => ['{#', '#}'],
        'tag_block' => ['{%', '%}'],
        'tag_variable' => ['{{', '}}'],
        'interpolation' => ['#{', '}']
    ],
];
