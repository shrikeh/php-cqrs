<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Handler\Attribute;

use Shrikeh\Cqrs\Handler\Type;

/**
 * @SuppressWarnings("PHPMD.NumberOfChildren")
 * @psalm-api
 */
abstract readonly class AsHandler
{
    protected function __construct(public Type $type)
    {
    }
}
