<?php

declare(strict_types=1);

namespace Potter\ArrayAccess\Numbered;

trait NumberedArrayTrait 
{
    private int $index = 0;
    
    final public function current(): mixed
    {
        return $this->offsetGet($this->index);
    }
    
    final public function key(): mixed
    {
        return $this->index;
    }
    
    final public function next(): void
    {
        $this->index++;
    }
        
    final public function rewind(): void
    {
        $this->index--;
    }
    
    final public function valid(): bool
    {
        return $this->offsetExists($this->index);
    }
    
    abstract public function offsetExists(mixed $offset): bool;
    abstract public function offsetGet(mixed $offset): mixed;
}
