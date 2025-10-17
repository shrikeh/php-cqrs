<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Message\Command\Exception;

use Shrikeh\Cqrs\Message\Exception\MessageException;

/**
 * @psalm-api
 */
interface CommandException extends MessageException
{
}
