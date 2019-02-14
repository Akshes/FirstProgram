<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class HelloTest extends TestCase
{
    public function testCanBeCreatedFromValidHello(): void
    {
        $this->assertInstanceOf(
            Hello::class,
            Hello::fromString('hello')
        );
    }

    public function testCannotBeCreatedFromInvalidHello(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Hello::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'hello',
            Hello::fromString('hello')
        );
    }
}