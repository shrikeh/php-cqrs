<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Message\Command\Attribute;

use Attribute;
use Shrikeh\Cqrs\Message\Attribute\AsMessage;
use Shrikeh\Cqrs\Message\Type;

/**
 * @psalm-api
 */
#[Attribute(Attribute::TARGET_CLASS)]
readonly class AsCommand extends AsMessage
{
    public function __construct()
    {
        parent::__construct(Type::COMMAND);
    }
}
