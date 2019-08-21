<?php declare(strict_types=1);

namespace DesignPatterns\Behavioral\Mediator;

interface Mediator
{
    public function sendResponse(string $content);

    public function makeRequest();

    public function queryDb();
}
