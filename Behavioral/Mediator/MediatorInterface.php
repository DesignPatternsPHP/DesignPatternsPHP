<?php
declare(strict_types=1);

namespace DesignPatterns\Behavioral\Mediator;

interface MediatorInterface
{
    /**
     * sends the response.
     *
     * @param string $content
     */
    public function sendResponse($content);

    /**
     * makes a request
     */
    public function makeRequest();

    /**
     * queries the DB
     */
    public function queryDb();
}
