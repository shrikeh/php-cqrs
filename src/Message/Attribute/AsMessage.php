<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Message\Attribute;

use Attribute;
use Shrikeh\Cqrs\Message\Type;

abstract readonly class AsMessage
{
    protected function __construct(public Type $type)
    {
    }
}
