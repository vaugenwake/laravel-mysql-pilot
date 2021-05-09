<?php

namespace Vaugenwake\MysqlPilot\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Vaugenwake\MysqlPilot\Models\MysqlPilot as ModelsMysqlPilot;
use Vaugenwake\MysqlPilot\MysqlPilot;
use Vaugenwake\MysqlPilot\Tests\TestCase;

class MysqlPilotTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_test_hello_world()
    {
        $laravel_mysql_pilot = new MysqlPilot();
        $this->assertEquals('hello world', $laravel_mysql_pilot->helloworld());
    }
}
