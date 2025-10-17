<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Handler\QueryHandler\Attribute;

use Attribute;
use Shrikeh\Cqrs\Handler\Attribute\AsHandler;
use Shrikeh\Cqrs\Handler\Type;

/**
 * @psalm-api
 */
#[Attribute(Attribute::TARGET_CLASS)]
readonly class AsQueryHandler extends AsHandler
{
    public function __construct()
    {
        parent::__construct(Type::QUERY_HANDLER);
    }
}
