<?php

$container->loadFromExtension('framework', [
    'http_method_override' => false,
    'property_info' => ['enabled' => true],
    'validation' => [
        'auto_mapping' => [
            'App\\' => ['foo', 'bar'],
            'Symfony\\' => ['a', 'b'],
            'Foo\\',
        ],
    ],
]);
