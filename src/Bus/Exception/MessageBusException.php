<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Bus\Exception;

use Shrikeh\Cqrs\Exception\CqrsException;

/**
 * @psalm-api
 */
interface MessageBusException extends CqrsException
{
}
