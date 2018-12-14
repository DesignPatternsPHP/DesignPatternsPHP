<?php

namespace DesignPatterns\Creational\AbstractFactory\Tests;

use DesignPatterns\Creational\AbstractFactory\CsvParser;
use DesignPatterns\Creational\AbstractFactory\JsonParser;
use DesignPatterns\Creational\AbstractFactory\ParserFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateCsvParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createCsvParser(CsvParser::OPTION_CONTAINS_HEADER);

        $this->assertInstanceOf(CsvParser::class, $parser);
    }

    public function testCsvParserCanParse()
    {
        $factory = new ParserFactory();
        $parser = $factory->createCsvParser(CsvParser::OPTION_CONTAINS_NO_HEADER);

        $result = $parser->parse("A0,A1,A2\nB0,B1,B2\nC0,C1,C2");

        $this->assertEquals(
            [
                ['A0', 'A1', 'A2'],
                ['B0', 'B1', 'B2'],
                ['C0', 'C1', 'C2']
            ],
            $result
        );
    }

    public function testCsvParserCanSkipHeader()
    {
        $factory = new ParserFactory();
        $parser = $factory->createCsvParser(CsvParser::OPTION_CONTAINS_HEADER);

        $result = $parser->parse("A0,A1,A2\nB0,B1,B2\nC0,C1,C2");

        $this->assertEquals(
            [
                ['B0', 'B1', 'B2'],
                ['C0', 'C1', 'C2']
            ],
            $result
        );
    }

    public function testCanCreateJsonParser()
    {
        $factory = new ParserFactory();
        $parser = $factory->createJsonParser();

        $this->assertInstanceOf(JsonParser::class, $parser);
    }
}
