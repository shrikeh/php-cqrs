<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Message;

/**
 * @psalm-api
 */
enum Type: string
{
    case COMMAND = 'message.command';
    case QUERY = 'message.query';
    case RESULT = 'message.result';
}
