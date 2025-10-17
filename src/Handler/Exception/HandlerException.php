<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Handler\Exception;

use Shrikeh\Cqrs\Exception\CqrsException;

/**
 * @psalm-api
 */
interface HandlerException extends CqrsException
{
}
