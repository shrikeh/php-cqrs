<?php

declare(strict_types=1);

namespace Tests\Unit\Bus\CommandBus\Attribute;

use PHPUnit\Framework\Attributes\Group;
use Shrikeh\Cqrs\Bus\CommandBus\Attribute\AsCommandBus;
use PHPUnit\Framework\TestCase;
use Shrikeh\Cqrs\Bus\Type;

#[Group('Bus')]
#[Group('Attribute')]
final class AsCommandBusTest extends TestCase
{
    public function testItHasTheCommandBusType(): void
    {
        $this->assertSame(Type::COMMAND_BUS, new AsCommandBus()->type);
    }
}
