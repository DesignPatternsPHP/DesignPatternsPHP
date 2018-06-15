<?php

namespace DesignPatterns\Creational\AbstractFactory;

class ParserFactory
{
    public function createCsvParser(bool $skipHeaderLine): CsvParser
    {
        return new CsvParser($skipHeaderLine);
    }

    public function createJsonParser(): JsonParser
    {
        return new JsonParser();
    }
}
