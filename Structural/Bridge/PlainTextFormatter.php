<?php

namespace DesignPatterns\Structural\Bridge;

class PlainTextFormatter implements FormatterInterface
{
    /**
     * @param string $text
     *
     * @return string
     */
    public function format(string $text)
    {
        return $text;
    }
}
