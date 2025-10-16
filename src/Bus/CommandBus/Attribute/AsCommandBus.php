<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Bus\CommandBus\Attribute;

use Attribute;
use Shrikeh\Cqrs\Bus\Attribute\AsBus;
use Shrikeh\Cqrs\Bus\Type;

#[Attribute(Attribute::TARGET_CLASS)]
readonly class AsCommandBus extends AsBus
{
    public function __construct()
    {
        parent::__construct(Type::COMMAND_BUS);
    }
}
