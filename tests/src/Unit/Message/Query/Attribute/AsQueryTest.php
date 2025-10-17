<?php

declare(strict_types=1);

namespace Tests\Unit\Message\Query\Attribute;

use PHPUnit\Framework\Attributes\Group;
use Shrikeh\Cqrs\Message\Query\Attribute\AsQuery;
use PHPUnit\Framework\TestCase;
use Shrikeh\Cqrs\Message\Type;

#[Group('Message')]
#[Group('Attribute')]
final class AsQueryTest extends TestCase
{
    public function testItHasTheCorrectMessageType(): void
    {
        $this->assertSame(Type::QUERY, new AsQuery()->type);
    }
}
