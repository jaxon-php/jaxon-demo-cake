<?php

use App\Service\Example;
use App\Service\ExampleInterface;

$directory = rtrim(ROOT, '/') . '/jaxon/ajax';

return [
    'app' => [
        'directories' => [
            $directory => [
                'namespace' => '\\Jaxon\\Ajax',
                'register' => false,
                // 'separator' => '', // '.' or '_'
                // 'protected' => [],
            ],
        ],
        'container' => [
            'auto' => [
                Example::class,
            ],
            'alias' => [
                ExampleInterface::class => Example::class
            ],
        ],
    ],
    'lib' => [
        'core' => [
            'language' => 'en',
            'encoding' => 'UTF-8',
            'request' => [
                'uri' => '/ajax',
                'csrf_meta' => 'csrf-token',
            ],
            'prefix' => [
                'class' => '',
            ],
            'debug' => [
                'on' => false,
                'verbose' => false,
            ],
            'error' => [
                'handle' => false,
            ],
        ],
        'js' => [
            'lib' => [
                // 'uri' => '/jaxon/lib',
            ],
            'app' => [
                // 'uri' => '',
                // 'dir' => '',
                'export' => false,
                'minify' => false,
            ],
        ],
        'dialogs' => [
            'libraries' => ['bootstrap', 'toastr', 'pgwjs'],
            'default' => [
                'modal' => 'bootstrap',
                'message' => 'toastr',
                'question' => 'bootstrap',
            ],
            'toastr' => [
                'options' => [
                    'closeButton' => true,
                    'positionClass' => 'toast-top-center'
                ],
            ],
            'assets' => [
                'include' => [
                    'all' => true,
                ],
            ],
        ],
    ],
];
