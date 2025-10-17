<?php

declare(strict_types=1);

namespace Tests\Unit\Message\Command\Attribute;

use PHPUnit\Framework\Attributes\Group;
use Shrikeh\Cqrs\Message\Command\Attribute\AsCommand;
use PHPUnit\Framework\TestCase;
use Shrikeh\Cqrs\Message\Type;

#[Group('Message')]
#[Group('Attribute')]
final class AsCommandTest extends TestCase
{
    public function testItHasTheCorrectMessageType(): void
    {
        $this->assertSame(Type::COMMAND, new AsCommand()->type);
    }
}
