<?php

declare(strict_types=1);

namespace Tests\Unit\Bus\QueryBus\Attribute;

use PHPUnit\Framework\Attributes\Group;
use Shrikeh\Cqrs\Bus\QueryBus\Attribute\AsQueryBus;
use PHPUnit\Framework\TestCase;
use Shrikeh\Cqrs\Bus\Type;

#[Group('Bus')]
#[Group('Attribute')]
final class AsQueryBusTest extends TestCase
{
    public function testItHasTheQueryBusType(): void
    {
        $this->assertSame(Type::QUERY_BUS, new AsQueryBus()->type);
    }
}
