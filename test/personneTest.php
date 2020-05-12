<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PersonneTest extends TestCase
{
    public function testCanBeCreatedFromValidPersonne(): void
    {
        $this->assertInstanceOf(
            Personne::class,
            Personne::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidPersonne(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }
/*

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
*/
}
