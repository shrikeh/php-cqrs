<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Bus\CommandBus\Exception;

use Shrikeh\Cqrs\Bus\Exception\MessageBusException;

/**
 * @psalm-api
 */
interface CommandBusException extends MessageBusException
{
}
