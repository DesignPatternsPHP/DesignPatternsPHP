<?php

namespace DesignPatterns\Structural\Facade;

interface BiosInterface
{
    public function execute();

    public function waitForKeyPress();

    /**
     * @param OsInterface $os
     *
     * @return mixed
     */
    public function launch(OsInterface $os);

    public function powerDown();
}
