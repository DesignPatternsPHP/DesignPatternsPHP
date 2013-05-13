<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\NullObject;

/**
 * LoggerInterface is a contract for logging something
 */
interface LoggerInterface
{

    public function log($str);
}