<?php

declare(strict_types=1);

namespace App\Bus;

use App\Bus\Exception\CommandBusException;
use App\Message\Command;
use App\Message\Result;

interface CommandBus extends MessageBus
{
    /**
     * @param Command $command
     * @return Result
     * @throws CommandBusException
     */
    public function __invoke(Command $command): Result;
}