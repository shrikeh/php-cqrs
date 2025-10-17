<?php

declare(strict_types=1);

namespace Tests\Unit\Message\Result\Attribute;

use PHPUnit\Framework\Attributes\Group;
use Shrikeh\Cqrs\Message\Result\Attribute\AsResult;
use PHPUnit\Framework\TestCase;
use Shrikeh\Cqrs\Message\Type;

#[Group('Message')]
#[Group('Attribute')]
final class AsResultTest extends TestCase
{
    public function testItHasTheCorrectMessageType(): void
    {
        $this->assertSame(Type::RESULT, new AsResult()->type);
    }
}
