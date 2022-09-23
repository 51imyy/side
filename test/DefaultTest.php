<?php

declare(strict_types=1);

namespace App\Test;

use PHPUnit\Framework\TestCase;

final class DefaultTest extends TestCase
{
    /**
     * Validating that testing works.
     * 
     * @test
     */
    public function default(): void
    {
        self::assertTrue(true);
    }
}