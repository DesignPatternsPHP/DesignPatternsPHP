# Dependency Injection

## Purpose

To implement a loosely coupled architecture in order to get better testable, maintainable and extendable code.

## Examples

* the Doctrine2 ORM uses dependency injection e.g. for Configuration that is injected into a Connection object. for testing purposes, one can easily create a mock object of the configuration and inject that into the connection object
* Symfony and Zend Framework 2 already have containers for DI that create objects via a configuration array and inject them where needed (i.e. in Controllers)
