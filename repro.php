<?php

require 'vendor/autoload.php';

$mapper = (new \CuyZ\Valinor\MapperBuilder())
    ->infer(\App\Serialization\InterfaceA::class, \App\Serialization\InterfaceAInferer::infer(...))
    ->infer(\App\Serialization\InterfaceB::class, \App\Serialization\InterfaceBInferer::infer(...))
    ->mapper();


$result = $mapper->map(
    \App\Serialization\Root::class,
    [
        'root' => [
            'a' => [
                'type' => 'a1',
            ],
            'b' => [
                'type' => 'b2',
            ],
        ]
    ]
);

var_dump($result);

