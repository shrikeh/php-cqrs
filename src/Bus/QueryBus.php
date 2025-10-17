<?php

declare(strict_types=1);

namespace Shrikeh\Cqrs\Bus;

use Shrikeh\Cqrs\Bus;
use Shrikeh\Cqrs\Bus\QueryBus\Exception\QueryBusException;
use Shrikeh\Cqrs\Message\Query;
use Shrikeh\Cqrs\Message\Result;

/**
 * @psalm-api
 */
interface QueryBus extends Bus
{
    /**
     * @param Query $query
     * @return Result
     * @throws QueryBusException
     */
    public function __invoke(Query $query): Result;
}
