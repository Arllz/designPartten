<?php

use DesignPartterns\CreateDesignPartterns\singleParttern\Singleton;
use PHPUnit\Framework\TestCase;

spl_autoload_register(function($class) {
    if(!class_exists($class)) {
        include_once($class.".php");
    }
});

class Test extends TestCase
{
    public function index()
    {
        $first = Singleton::getInstance();
        $second = Singleton::getInstance();
        $this->assertInstanceOf(Singleton::class,$first);
        $this->assertInstanceOf(Singleton::class,$second);
    }
}

(new Test())->index();




