<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\NullObject;

/**
 * LoggerInterface is a contract for logging something
 * 
 * Key-feaature : NullLogger MUST inherit from this interface like any other Loggers
 */
interface LoggerInterface
{

    public function log($str);
}