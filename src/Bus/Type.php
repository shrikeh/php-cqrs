<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Bus;

/**
 * @psalm-api
 */
enum Type: string
{
    case COMMAND_BUS = 'bus.command';
    case QUERY_BUS = 'bus.query';
}
