<?php

use DesignPartterns\CreateDesignPartterns\singleParttern\Singleton;
use PHPUnit\Framework\TestCase;

$loader = require 'vendor/autoload.php';

class Test extends TestCase
{
    public function index()
    {
        $first = Singleton::getInstance();
        $second = Singleton::getInstance();
        echo "<pre>";
        var_dump($first);
        var_dump($second);
        $this->assertInstanceOf(Singleton::class,$first);
        $ret = $this->assertSame($first,$second);
        var_dump($ret);
    }

    public function index2()
    {

    }
}

(new Test())->index();





