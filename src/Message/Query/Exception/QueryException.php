<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Message\Query\Exception;

use Shrikeh\Cqrs\Message\Exception\MessageException;

/**
 * @psalm-api
 */
interface QueryException extends MessageException
{
}
