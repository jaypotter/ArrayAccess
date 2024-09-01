<?php

declare(strict_types=1);

namespace Potter\ArrayAccess;

abstract class AbstractArrayAccess implements ArrayAccessInterface
{
    abstract public function offsetExists(mixed $offset): bool;
    abstract public function offsetGet(mixed $offset): mixed;
    abstract public function offsetSet(mixed $offset, mixed $value): void;
    abstract public function offsetUnset(mixed $offset): void;
    
    abstract public function toArray(): array;
}
