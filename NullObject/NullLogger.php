<?php

/*
 * DesignPatternPHP
 */

namespace DesignPatterns\NullObject;

/**
 * NullOutput is a example of NullObject pattern. It is not formely a Design
 * Pattern by the GoF but it's a schema which appears frequently enough to
 * be a pattern. Futhermore it is a really good pattern in my opinion :
 * - the code in the client is simple
 * - it reduces the chance of null pointer exception
 * - less "if" => less test cases
 * 
 * The purpose : every time you have a method which returns an object or null,
 * you should return an object or a "NullObject". With NullObject, you don't need
 * statement like "if (!is_null($obj)) { $obj->callSomething(); }" anymore.
 *  
 * In this case, this a logger which does nothing. Other examples :
 * - null logger of symfony profiler
 * - null output in symfony/console 
 * - null handler in a Chain of Responsiblities pattern
 * - null command in a Command pattern
 * 
 * Performance concerns : ok there is a call for nothing but we spare an "if is_null"
 * I didn't run a benchmark but I think it's equivalent.
 */
class NullLogger implements LoggerInterface
{

    public function log($str)
    {
        
    }

}