<?php

namespace DesignPatterns\Structural\Adapter;

interface BookInterface
{
    public function turnPage();

    public function open();

    /**
     * @return int
     */
    public function getPage(): int;
}
