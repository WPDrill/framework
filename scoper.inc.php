<?php

declare (strict_types=1);
namespace Popup;

// scoper.inc.php
use Popup\Isolated\Symfony\Component\Finder\Finder;
\ini_set('memory_limit', '1024M');
return [
    'prefix' => "#[root-namespace]",
    // string|null
    //'output-dir' => null,
    // string|null
    'finders' => [],
    // list<Finder>
    'patchers' => [],
    // list<callable(string $filePath, string $prefix, string $contents): string>
    'exclude-files' => [
        'composer.json',
    ],
    // list<string>
    'exclude-namespaces' => [],
    // list<string|regex>
    'exclude-constants' => [],
    // list<string|regex>
    'exclude-classes' => [],
    // list<string|regex>
    'exclude-functions' => [],
    // list<string|regex>
    'expose-global-constants' => \true,
    // bool
    'expose-global-classes' => \true,
    // bool
    'expose-global-functions' => \true,
    // bool
    'expose-namespaces' => [],
    // list<string|regex>
    'expose-constants' => [],
    // list<string|regex>
    'expose-classes' => [],
    // list<string|regex>
    'expose-functions' => [],
];
