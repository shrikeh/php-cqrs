<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Message\Attribute;

use Shrikeh\Cqrs\Message\Type;

/**
 * @SuppressWarnings("PHPMD.NumberOfChildren")
 * @psalm-api
 */
abstract readonly class AsMessage
{
    protected function __construct(public Type $type)
    {
    }
}
