<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Handler\Attribute;

use Shrikeh\Cqrs\Handler\Type;

abstract readonly class AsHandler
{
    protected function __construct(public Type $type)
    {
    }
}
