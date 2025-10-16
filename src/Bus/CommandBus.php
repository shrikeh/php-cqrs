<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Bus;

use Shrikeh\Cqrs\Bus;
use Shrikeh\Cqrs\Bus\CommandBus\Exception\CommandBusException;
use Shrikeh\Cqrs\Message\Command;
use Shrikeh\Cqrs\Message\Result;

interface CommandBus extends Bus
{
    /**
     * @param Command $command
     * @return Result
     * @throws CommandBusException
     */
    public function __invoke(Command $command): Result;
}
