<?php


namespace DesignPartterns\CreateDesignPartterns\abstractFactory;


class UnixCsvWriter implements CsvWrite
{
    public function write(array $line): string
    {
        // TODO: Implement write() method.
        return join(',',$line). "\n";
    }
}