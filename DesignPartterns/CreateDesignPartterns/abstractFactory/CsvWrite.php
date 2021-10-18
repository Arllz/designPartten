<?php


namespace DesignPartterns\CreateDesignPartterns\abstractFactory;


interface CsvWrite
{
    public function write(array $line): string;
}