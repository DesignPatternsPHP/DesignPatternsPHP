<?php

namespace DesignPatterns\Creational\AbstractFactory;

class CsvParser implements Parser
{
    const OPTION_CONTAINS_HEADER = true;
    const OPTION_CONTAINS_NO_HEADER = false;

    /**
     * @var bool
     */
    private $skipHeaderLine;

    public function __construct(bool $skipHeaderLine)
    {
        $this->skipHeaderLine = $skipHeaderLine;
    }

    public function parse(string $input): array
    {
        $headerWasParsed = false;
        $parsedLines = [];

        foreach (explode(PHP_EOL, $input) as $line) {
            if (!$headerWasParsed && $this->skipHeaderLine === self::OPTION_CONTAINS_HEADER) {
                $headerWasParsed = true;
                continue;
            }

            $parsedLines[] = str_getcsv($line);
        }

        return $parsedLines;
    }
}
