# DesignPatternsPHP

[![Build Status](https://travis-ci.org/domnikl/DesignPatternsPHP.png?branch=master)](https://travis-ci.org/domnikl/DesignPatternsPHP)

This is a collection of known design patterns and some sample code how to implement them in PHP. Every pattern has a small list of examples (most of them from Zend Framework, Symfony2 or Doctrine2 as I'm most familiar with this software).

I think the problem with patterns is that often people do know them but don't know when to apply which.

## Patterns

The patterns can be structured in roughly three different categories:

### Creational

* [AbstractFactory](AbstractFactory)
* [Builder](Builder)
* [SimpleFactory](SimpleFactory)
* [FactoryMethod](FactoryMethod)
* [StaticFactory](StaticFactory)
* [Prototype](Prototype)
* [Singleton](Singleton) (is considered an anti-pattern! :no_entry:)
* [Multiton](Multiton) (is considered an anti-pattern! :no_entry:)

### Structural

* [Adapter](Adapter)
* [Composite](Composite)
* [Decorator](Decorator)
* [Facade](Facade)
* [Proxy](Proxy)
* [Registry](Registry)
* [FluentInterface](FluentInterface)
* [DataMapper](DataMapper)
* [DependencyInjection](DependencyInjection)

### Behavioral

* [ChainOfResponsibilities](ChainOfResponsibilities)
* [Command](Command)
* [Iterator](Iterator)
* [Mediator](Mediator)
* [NullObject](NullObject)
* [Observer](Observer)
* [StatusPattern](StatusPattern)
* [Strategy](Strategy)
* [TemplateMethod](TemplateMethod)
* [Visitor](Visitor)

## Contribute

Please feel free to fork and extend existing or add your own examples and send a pull request with your changes!

## License

(The MIT License)

Copyright (c) 2013 Dominik Liebler

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

