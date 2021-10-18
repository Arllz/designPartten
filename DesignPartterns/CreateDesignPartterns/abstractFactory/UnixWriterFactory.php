<?php


namespace DesignPartterns\CreateDesignPartterns\abstractFactory;


class UnixWriterFactory implements WriterFactory
{
    public function createJsonWriter(): CsvWrite
    {
        // TODO: Implement createJsonWriter() method.
        return new UnixCsvWriter();
    }

    public function createCsvWriter(): JsonWriter
    {
        // TODO: Implement createCsvWriter() method.
        return new UnixJsonWriter();
    }

}