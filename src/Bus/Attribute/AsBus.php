<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Bus\Attribute;

use Shrikeh\Cqrs\Bus\Type;

/**
 * @SuppressWarnings("PHPMD.NumberOfChildren")
 * @psalm-api
 */
abstract readonly class AsBus
{
    protected function __construct(public Type $type)
    {
    }
}
