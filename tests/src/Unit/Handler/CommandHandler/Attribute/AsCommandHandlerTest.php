<?php

declare(strict_types=1);

namespace Tests\Unit\Handler\CommandHandler\Attribute;

use PHPUnit\Framework\Attributes\Group;
use Shrikeh\Cqrs\Handler\CommandHandler\Attribute\AsCommandHandler;
use PHPUnit\Framework\TestCase;
use Shrikeh\Cqrs\Handler\Type;

#[Group('Handler')]
#[Group('Attribute')]
final class AsCommandHandlerTest extends TestCase
{
    public function testItHasTheCorrectHandlerType(): void
    {
        $this->assertSame(Type::COMMAND_HANDLER, new AsCommandHandler()->type);
    }
}
