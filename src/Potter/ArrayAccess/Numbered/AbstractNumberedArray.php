<?php

declare(strict_types=1);

namespace Potter\ArrayAccess\Numbered;

use Potter\ArrayAccess\AbstractArrayAccess;

abstract class AbstractNumberedArray extends AbstractArrayAccess implements NumberedArrayInterface
{
    abstract public function getLength(): int;
}
