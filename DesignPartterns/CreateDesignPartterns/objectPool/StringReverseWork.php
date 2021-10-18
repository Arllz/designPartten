<?php


namespace DesignPartterns\CreateDesignPartterns\objectPool;


class StringReverseWork
{
    public function __construct()
    {
    }

    public function run(string $text):string
    {
        return strrev($text);
    }

}