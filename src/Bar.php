<?php

declare(strict_types=1);

namespace App;

/** @template T of Foo */
final class Bar
{
    public string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }
}
