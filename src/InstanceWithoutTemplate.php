<?php

declare(strict_types=1);

namespace App;

final class InstanceWithoutTemplate
{
    public Bar $foo;

    public function __construct(Bar $foo)
    {
        $this->foo = $foo;
    }
}
