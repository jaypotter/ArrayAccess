<?php

declare(strict_types=1);

namespace Potter\ArrayAccess\Numbered;

use Potter\ArrayAccess\ArrayAccessInterface;
use Potter\Iterator\IteratorInterface;

interface NumberedArrayInterface extends ArrayAccessInterface, IteratorInterface
{
    public function getLength(): int;
}
