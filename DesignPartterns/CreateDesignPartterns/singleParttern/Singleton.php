<?php
namespace DesignPartterns\CreateDesignPartterns\singleParttern;

use Exception;

final class Singleton
{
    private static  $instance = null;

    public static function getInstance():Singleton
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    private function __construct()
    {

    }

    private function __clone()
    {

    }

    public function __wakeup()
    {
        throw new Exception("Cannot unserizlize singleton");
    }

}