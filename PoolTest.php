<?php

use DesignPartterns\CreateDesignPartterns\objectPool\WorkPool;

$loader = require 'vendor/autoload.php';

class PoolTest extends \PHPUnit\Framework\TestCase
{
    public function testCanGetNewInstancesWithGet()
    {
        $pool = new WorkPool();
        $work1 = $pool->get();
        $work2 = $pool->get();
        $this->assertCount(2,$pool);
        $this->assertNotSame($work1,$work2);
    }
}