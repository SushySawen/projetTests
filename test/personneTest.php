<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PersonneTest extends TestCase
{
    public function testMauvaisNombreArguments(): void
    {
        $this->expectException(BadMethodCallException::class);
        Adherent::__construct('invalid');
    }

    public function testCreationOK(): void
    {
        $this->assertInstanceOf(
            Adherent::class,
            Adherent::__construct('Jean', 'Machin', '08/09/2000')
        );
    }
}
