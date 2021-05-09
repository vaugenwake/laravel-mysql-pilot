<?php

namespace VendorName\Skeleton\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use VendorName\Skeleton\Models\Skeleton as ModelsSkeleton;
use VendorName\Skeleton\Skeleton;
use VendorName\Skeleton\Tests\TestCase;

class SkeletonTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_test_hello_world()
    {
        $skeleton = new Skeleton();
        $this->assertEquals('hello world', $skeleton->helloworld());
    }

    /** @test */
    public function can_use_models_and_factories()
    {
        ModelsSkeleton::factory()->count(3)->create();

        $this->assertEquals(3, (ModelsSkeleton::all()->count()));
    }
}
