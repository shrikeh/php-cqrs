<?php

declare(strict_types=1);

namespace App\Bus;

use App\Bus\Exception\QueryBusException;
use App\Message\Query;
use App\Message\Result;

interface QueryBus extends MessageBus
{
    /**
     * @param Query $query
     * @return Result
     * @throws QueryBusException
     */
    public function __invoke(Query $query): Result;
}