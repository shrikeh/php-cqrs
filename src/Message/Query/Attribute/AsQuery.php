<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Message\Query\Attribute;

use Attribute;
use Shrikeh\Cqrs\Message\Attribute\AsMessage;
use Shrikeh\Cqrs\Message\Type;

#[Attribute(Attribute::TARGET_CLASS)]
readonly class AsQuery extends AsMessage
{
    public function __construct()
    {
        parent::__construct(Type::QUERY);
    }
}
