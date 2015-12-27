<?php

namespace DesignPatterns\Behavioral\Mediator;

/**
 * MediatorInterface is a contract for the Mediator
 * This interface is not mandatory but it is better for LSP concerns.
 */
interface MediatorInterface
{
    /**
     * sends the response.
     *
     * @param string $content
     */
    public function sendResponse($content);

    /**
     * makes a request.
     */
    public function makeRequest();

    /**
     * queries the DB.
     */
    public function queryDb();
}
