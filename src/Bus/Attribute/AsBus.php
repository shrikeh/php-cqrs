<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Bus\Attribute;

use Shrikeh\Cqrs\Bus\Type;

abstract readonly class AsBus
{
    protected function __construct(public Type $type)
    {
    }
}
