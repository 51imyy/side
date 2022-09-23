<?php

declare(strict_types=1);

namespace App\Test;

use App\Service\ExampleService;
use PHPUnit\Framework\TestCase;

final class ExampleServiceTest extends TestCase
{
    /**
     * @test
     */
    public function init(): void
    {
        $service = new ExampleService();

        self::assertEquals('test1', $service->example('test'));
 }
}