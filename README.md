# DesignPatternsPHP

[![Build Status](https://travis-ci.org/domnikl/DesignPatternsPHP.png?branch=master)](https://travis-ci.org/domnikl/DesignPatternsPHP)

This is a collection of known design patterns and some sample code how to implement them in PHP. Every pattern has a small list of examples (most of them from Zend Framework, Symfony2 or Doctrine2 as I'm most familiar with this software).

I think the problem with patterns is that often people do know them but don't know when to apply which.

## Patterns

The patterns can be structured in roughly three different categories. Please click on the :notebook: for a full explanation of the pattern on Wikipedia.

### Creational

* [AbstractFactory](AbstractFactory) [:notebook:](http://en.wikipedia.org/wiki/Abstract_factory_pattern)
* [Builder](Builder) [:notebook:](http://en.wikipedia.org/wiki/Builder_pattern)
* [SimpleFactory](SimpleFactory)
* [FactoryMethod](FactoryMethod) [:notebook:](http://en.wikipedia.org/wiki/Factory_method_pattern)
* [StaticFactory](StaticFactory)
* [Prototype](Prototype) [:notebook:](http://en.wikipedia.org/wiki/Prototype_pattern)
* [Singleton](Singleton) [:notebook:](http://en.wikipedia.org/wiki/Singleton_pattern) (is considered an anti-pattern! :no_entry:)
* [Multiton](Multiton) (is considered an anti-pattern! :no_entry:)

### Structural

* [Adapter](Adapter) [:notebook:](http://en.wikipedia.org/wiki/Adapter_pattern)
* [Composite](Composite) [:notebook:](http://en.wikipedia.org/wiki/Composite_pattern)
* [Decorator](Decorator) [:notebook:](http://en.wikipedia.org/wiki/Decorator_pattern)
* [Facade](Facade) [:notebook:](http://en.wikipedia.org/wiki/Facade_pattern)
* [Proxy](Proxy) [:notebook:](http://en.wikipedia.org/wiki/Proxy_pattern)
* [Registry](Registry) [:notebook:](http://en.wikipedia.org/wiki/Service_locator_pattern)
* [FluentInterface](FluentInterface) [:notebook:](http://en.wikipedia.org/wiki/Fluent_interface)
* [DataMapper](DataMapper) [:notebook:](http://en.wikipedia.org/wiki/Data_mapper_pattern)
* [DependencyInjection](DependencyInjection) [:notebook:](http://en.wikipedia.org/wiki/Dependency_injection)

### Behavioral

* [ChainOfResponsibilities](ChainOfResponsibilities) [:notebook:](http://en.wikipedia.org/wiki/Chain_of_responsibility_pattern)
* [Command](Command) [:notebook:](http://en.wikipedia.org/wiki/Command_pattern)
* [Iterator](Iterator) [:notebook:](http://en.wikipedia.org/wiki/Iterator_pattern)
* [Mediator](Mediator) [:notebook:](http://en.wikipedia.org/wiki/Mediator_pattern)
* [NullObject](NullObject) [:notebook:](http://en.wikipedia.org/wiki/Null_Object_pattern)
* [Observer](Observer) [:notebook:](http://en.wikipedia.org/wiki/Observer_pattern)
* [Specification](Specification) [:notebook:](http://en.wikipedia.org/wiki/Specification_pattern)
* [State](State) [:notebook:](http://en.wikipedia.org/wiki/State_pattern)
* [Strategy](Strategy) [:notebook:](http://en.wikipedia.org/wiki/Strategy_pattern)
* [TemplateMethod](TemplateMethod) [:notebook:](http://en.wikipedia.org/wiki/Template_method_pattern)
* [Visitor](Visitor) [:notebook:](http://en.wikipedia.org/wiki/Visitor_pattern)

## Contribute

Please feel free to fork and extend existing or add your own examples and send a pull request with your changes!
To establish a consistent code quality, please check your code using [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) against [PSR2 standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) using `./vendor/bin/phpcs -p --standard=PSR2 --ignore=vendor .`.

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

