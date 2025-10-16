<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Message\Command\Exception;

use Shrikeh\Cqrs\Message\Exception\MessageException;

interface CommandException extends MessageException
{
}
