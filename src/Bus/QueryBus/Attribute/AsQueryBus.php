<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Bus\QueryBus\Attribute;

use Attribute;
use Shrikeh\Cqrs\Bus\Attribute\AsBus;
use Shrikeh\Cqrs\Bus\Type;

/**
 * @psalm-api
 */
#[Attribute(Attribute::TARGET_CLASS)]
readonly class AsQueryBus extends AsBus
{
    public function __construct()
    {
        parent::__construct(Type::QUERY_BUS);
    }
}
