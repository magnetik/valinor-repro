<?php

namespace App\Serialization;

use App\Serialization\A\ClassA1;
use App\Serialization\A\ClassA2;

class InterfaceAInferer
{
    /**
     * @return class-string<ClassA1|ClassA2>
     */
    public static function infer(string $type)
    {
        if ($type === 'a1') {
            return ClassA1::class;
        }
        if ($type === 'a2') {
            return ClassA2::class;
        }
    }
}
