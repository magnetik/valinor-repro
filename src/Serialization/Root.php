<?php

namespace App\Serialization;

class Root
{
    public function __construct(
        public readonly InterfaceA $a,
        public readonly InterfaceB $b,
    ) {
    }
}
