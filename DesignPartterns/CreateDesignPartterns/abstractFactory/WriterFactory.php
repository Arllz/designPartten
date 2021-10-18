<?php


namespace DesignPartterns\CreateDesignPartterns\abstractFactory;


interface WriterFactory
{
    public function createJsonWriter(): CsvWrite;
    public function createCsvWriter(): JsonWriter;
}