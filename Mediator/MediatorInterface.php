<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\Mediator;

/**
 * MediatorInterface is a contract for the Mediator
 * This interface is not mandatory but it is better for LSP concerns
 */
interface MediatorInterface
{

    function sendResponse($content);

    function makeRequest();

    function queryDb();
}