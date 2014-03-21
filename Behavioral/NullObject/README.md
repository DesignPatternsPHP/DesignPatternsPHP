# Null Object

## Purpose

NullOutput is a example of NullObject pattern. It is not formally a Design Pattern by the GoF but it's a schema which appears frequently enough to
be a pattern. Furthermore it is a really good pattern in my opinion:

* the code in the client is simple
* it reduces the chance of null pointer exception
* less "if" => less test cases

Every time you have a method which returns an object or null, you should return an object or a `NullObject`. With NullObject, you don't need
a statement like `if (!is_null($obj)) { $obj->callSomething(); }` anymore.

## Examples

* Symfony2: null logger of profiler
* Symfony2: null output in Symfony/Console
* null handler in a Chain of Responsibilities pattern
* null command in a Command pattern
