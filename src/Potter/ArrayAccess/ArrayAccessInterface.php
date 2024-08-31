<?php

declare(strict_types=1);

namespace Potter\ArrayAccess;

use ArrayAccess;

interface ArrayAccessInterface extends ArrayAccess
{
    public function offsetExists(mixed $offset): bool;
    public function offsetGet(mixed $offset): mixed;
    public function offsetSet(mixed $offset, mixed $value): void;
    public function offsetUnset(mixed $offset): void;
}
