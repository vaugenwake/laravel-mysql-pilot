<?php

namespace VendorName\Skeleton\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use VendorName\Skeleton\SkeletonServiceProvider;

class TestCase extends Orchestra
{
    /**
     * Inject serive provider
     */
    protected function getPackageProviders($app)
    {
        return [
            SkeletonServiceProvider::class
        ];
    }

    /**
     * Setup test enviroment with migrations and factories
     * @return void
     */
    public function getEnvironmentSetUp($app)
    {
        include_once __DIR__ . '/../database/migrations/create_skeleton_table.php.stub';

        // run the up method of the migration
        (new \CreateSkeletonTable())->up();
    }
}
