<?php

namespace DesignPatterns\Mediator;

/**
 * MediatorInterface is a contract for the Mediator
 * This interface is not mandatory but it is better for LSP concerns
 */
interface MediatorInterface
{
    /**
     * sends the response
     *
     * @param string $content
     */
    function sendResponse($content);

    /**
     * makes a request
     */
    function makeRequest();

    /**
     * queries the DB
     */
    function queryDb();
}
