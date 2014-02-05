# Dependency Injection

## Purpose

To implement a loosely coupled architecture in order to get better testable, maintainable and extendable code.

## Usage

Configuration gets injected and `Connection` will get all that it needs from Configuration Without DI, the configuration would be created directly in Connection, which is not very good for testing and extending `Connection`.

Notice we are following Inversion of control principle in `Connection` by asking `$config` to implement `Parameters` interface. This decouples our components. We don't care where the source of information comes from, we only care that config has certain methods to retrieve that information. Read more about Inversion of control [here](http://en.wikipedia.org/wiki/Inversion_of_control).

## Examples

* the Doctrine2 ORM uses dependency injection e.g. for Configuration that is injected into a Connection object. for testing purposes, one can easily create a mock object of the configuration and inject that into the connection object
* Symfony and Zend Framework 2 already have containers for DI that create objects via a configuration array and inject them where needed (i.e. in Controllers)
