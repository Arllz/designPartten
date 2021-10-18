<?php


namespace DesignPartterns\CreateDesignPartterns\abstractFactory;


interface JsonWriter
{
    public function write(array $data,bool $formatted): string;
}