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

    protected function defineEnvironment($app)
    {
        $app['config']->set('app.env', 'testing');
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }
}
