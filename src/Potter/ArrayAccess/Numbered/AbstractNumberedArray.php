<?php

declare(strict_types=1);

namespace Potter\ArrayAccess\Numbered;

abstract class AbstractNumberedArray implements NumberedArrayInterface
{
    abstract public function getLength(): int;
}
