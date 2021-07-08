<?php

declare(strict_types=1);

namespace App;

final class InstanceWithTemplate
{
    /** @var \App\Bar<ConcreteFoo> */
    public Bar $foo;

    /** @param \App\Bar<ConcreteFoo> $foo */
    public function __construct(Bar $foo)
    {
        $this->foo = $foo;
    }
}
