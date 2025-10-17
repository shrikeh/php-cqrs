<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Handler\CommandHandler\Attribute;

use Attribute;
use Shrikeh\Cqrs\Handler\Attribute\AsHandler;
use Shrikeh\Cqrs\Handler\Type;

/**
 * @psalm-api
 */
#[Attribute(Attribute::TARGET_CLASS)]
readonly class AsCommandHandler extends AsHandler
{
    public function __construct()
    {
        parent::__construct(Type::COMMAND_HANDLER);
    }
}
