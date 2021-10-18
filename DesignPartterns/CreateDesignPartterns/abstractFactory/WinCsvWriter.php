<?php


namespace DesignPartterns\CreateDesignPartterns\abstractFactory;


class WinCsvWriter implements CsvWrite
{
    public function write(array $line): string
    {
        // TODO: Implement write() method.
        return join(',',$line)."\r\n";
    }
}