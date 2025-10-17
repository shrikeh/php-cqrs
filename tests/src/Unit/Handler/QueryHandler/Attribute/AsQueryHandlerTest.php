<?php

declare(strict_types=1);

namespace Tests\Unit\Handler\QueryHandler\Attribute;

use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;
use Shrikeh\Cqrs\Handler\QueryHandler\Attribute\AsQueryHandler;
use Shrikeh\Cqrs\Handler\Type;

#[Group('Handler')]
#[Group('Attribute')]
final class AsQueryHandlerTest extends TestCase
{
    public function testItHasTheCorrectHandlerType(): void
    {
        $this->assertSame(Type::QUERY_HANDLER, new AsQueryHandler()->type);
    }
}
