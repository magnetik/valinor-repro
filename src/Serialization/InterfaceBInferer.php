<?php

namespace App\Serialization;

use App\Serialization\B\ClassB1;
use App\Serialization\B\ClassB2;

class InterfaceBInferer
{
    /**
     * @return class-string<ClassB1|ClassB2>
     */
    public static function infer(string $type)
    {
        if ($type === 'b1') {
            return ClassB1::class;
        }
        if ($type === 'b2') {
            return ClassB2::class;
        }
    }
}
