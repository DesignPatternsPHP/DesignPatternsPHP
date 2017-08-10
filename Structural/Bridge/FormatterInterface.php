<?php

namespace DesignPatterns\Structural\Bridge;

interface FormatterInterface
{
    /**
     * @param string $text
     *
     * @return mixed
     */
    public function format(string $text);
}
