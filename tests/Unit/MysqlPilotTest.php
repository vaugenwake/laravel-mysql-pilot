<?php

namespace Vaugenwake\MysqlPilot\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Vaugenwake\MysqlPilot\Tests\TestCase;

class MysqlPilotTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_test_hello_world()
    {
        $this->assertTrue(true);
    }
}
