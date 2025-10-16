<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Bus\QueryBus\Exception;

use Shrikeh\Cqrs\Bus\Exception\MessageBusException;

interface QueryBusException extends MessageBusException
{
}
