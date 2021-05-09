<?php

namespace Vaugenwake\MysqlPilot\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Vaugenwake\MysqlPilot\MysqlPilotServiceProvider;

class TestCase extends Orchestra
{
    /**
     * Inject serive provider
     */
    protected function getPackageProviders($app)
    {
        return [
            MysqlPilotServiceProvider::class
        ];
    }
}
