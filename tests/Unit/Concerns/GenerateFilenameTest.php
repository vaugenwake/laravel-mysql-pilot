<?php

namespace Vaugenwake\MysqlPilot\Tests\Unit;

use Vaugenwake\MysqlPilot\Concerns\GenerateFileName;
use Vaugenwake\MysqlPilot\Tests\TestCase;

class GenerateFilenameTest extends TestCase
{
    /** @test */
    public function can_generate_new_filename()
    {
        $timestamp = date('Y-m-d_Hi');
        list($tempLocation, $targetLocation) = GenerateFileName::generate($timestamp);

        $this->assertEquals('/tmp/:memory:_' . $timestamp . '.sql', $tempLocation);
        $this->assertEquals('/testing/:memory:_' . $timestamp . '.sql', $targetLocation);
    }

    /** @test */
    public function can_generate_new_filename_with_prefix()
    {
        $timestamp = date('Y-m-d_Hi');
        $this->app['config']->set('mysqlpilot.prefix', 'prefix');
        list($tempLocation, $targetLocation) = GenerateFileName::generate($timestamp);

        $this->assertEquals('/tmp/:memory:_prefix_' . $timestamp . '.sql', $tempLocation);
        $this->assertEquals('/testing/:memory:_prefix_' . $timestamp . '.sql', $targetLocation);
    }

    /** @test */
    public function can_generate_new_filename_with_suffix()
    {
        $timestamp = date('Y-m-d_Hi');
        $this->app['config']->set('mysqlpilot.suffix', 'suffix');
        list($tempLocation, $targetLocation) = GenerateFileName::generate($timestamp);

        $this->assertEquals('/tmp/:memory:_' . $timestamp . '_suffix.sql', $tempLocation);
        $this->assertEquals('/testing/:memory:_' . $timestamp . '_suffix.sql', $targetLocation);
    }

    /** @test */
    public function can_generate_new_filename_with_prefix_and_suffix()
    {
        $timestamp = date('Y-m-d_Hi');
        $this->app['config']->set('mysqlpilot.prefix', 'prefix');
        $this->app['config']->set('mysqlpilot.suffix', 'suffix');
        list($tempLocation, $targetLocation) = GenerateFileName::generate($timestamp);

        $this->assertEquals('/tmp/:memory:_prefix_' . $timestamp . '_suffix.sql', $tempLocation);
        $this->assertEquals('/testing/:memory:_prefix_' . $timestamp . '_suffix.sql', $targetLocation);
    }
}