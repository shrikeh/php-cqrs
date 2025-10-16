<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Handler;

enum Type: string
{
    case COMMAND_HANDLER = 'handler.command';
    case QUERY_HANDLER = 'handler.query';
}
