<?php

namespace DesignPatterns\Structural\Bridge;

class HtmlFormatter implements FormatterInterface
{
    /**
     * @param string $text
     *
     * @return mixed|string
     */
    public function format(string $text)
    {
        return sprintf('<p>%s</p>', $text);
    }
}
