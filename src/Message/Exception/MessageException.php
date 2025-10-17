<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Message\Exception;

use Shrikeh\Cqrs\Exception\CqrsException;

/**
 * @psalm-api
 */
interface MessageException extends CqrsException
{
}
