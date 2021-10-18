<?php


namespace DesignPartterns;


use DesignPartterns\CreateDesignPartterns\abstractFactory\CsvWrite;
use DesignPartterns\CreateDesignPartterns\abstractFactory\JsonWriter;
use DesignPartterns\CreateDesignPartterns\abstractFactory\UnixWriterFactory;
use DesignPartterns\CreateDesignPartterns\abstractFactory\WinWriteFactory;
use DesignPartterns\CreateDesignPartterns\abstractFactory\WriterFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory()
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriteFactory()]
        ];
    }

    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWriter::class,$writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWrite::class,$writerFactory->createCsvWriter());
    }

}