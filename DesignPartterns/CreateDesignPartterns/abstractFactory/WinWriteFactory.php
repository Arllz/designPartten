<?php


namespace DesignPartterns\CreateDesignPartterns\abstractFactory;


class WinWriteFactory implements WriterFactory
{
    public function createCsvWriter(): CsvWrite
    {
        // TODO: Implement createCsvWriter() method.
        return new WinCsvWriter();
    }

    public function createJsonWriter(): JsonWriter
    {
        // TODO: Implement createJsonWriter() method.
        return new WinJsonWriter();
    }
}