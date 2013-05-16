# design patterns in PHP #

[![Build Status](https://travis-ci.org/Trismegiste/DesignPatternsPHP.png?branch=master)](https://travis-ci.org/Trismegiste/DesignPatternsPHP)

This is a collection of known design patterns and some sample code how to implement them in PHP. Every pattern has a
small list of examples (most of them from Zend Framework or Doctrine2 as I'm most familiar with this software).

I think the problem with patterns is that often people do know them but don't know when to apply which.

*Please feel free to fork and add your own examples!*

Changes I've made :
* Adding a config and autoloader for PHPUnit
* Fixing PSR-0 for namespace and one class per file (for tested patterns)
* Moving the original Factory Method in its right place : Static Factory (+ Tests)
* Adding the Simple Factory pattern (+ Tests)
* Adding a real Factory Method Design Pattern "by the book" (+ Tests)
* Rewriting the Abstract Factory which was not a abstract factory by the GoF definition (+ Tests)
* Fixing Composite Pattern which was not a Composite pattern (+ Tests)
* Fixing Decorator Pattern which was only a Wrapper pattern (+ Tests)
* Comments on why iterator pattern example is not relevant
* Adding a new Iterator example without external influence of other pattern (+ extended Tests)
* Adding a more visual example for Facade pattern (+ Tests)
* Fixing the Command pattern by adding missing mandatory classes (+ Tests)
* Fixing the Adapter Pattern because it was buggy and incomplete (+ Tests)
* Adding Template Method Pattern (+ Tests)
* Adding Builder Pattern (+ Tests)
* Adding Mediator Pattern (+ Tests)
* Adding a full example of Chain of Responsibilities (+Tests)
* PSR-0 for FluentInterface & Tests
* Null Object Pattern (+ Tests)