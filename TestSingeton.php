<?php

use DesignPartterns\CreateDesignPartterns\singleParttern\Singleton;
use PHPUnit\Framework\TestCase;

$loader = require 'vendor/autoload.php';

class TestSingeton extends TestCase
{
    public function testUniqueness()
    {
        $first = Singleton::getInstance();
        $second = Singleton::getInstance();
        $this->assertInstanceOf(Singleton::class,$first);
        $this->assertSame($first,$second);
    }

    public function index2()
    {

    }
}





