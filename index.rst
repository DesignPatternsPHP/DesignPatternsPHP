DesignPatternsPHP
=================

|Build Status|

This is a collection of known design patterns and some sample code how
to implement them in PHP. Every pattern has a small list of examples
(most of them from Zend Framework, Symfony2 or Doctrine2 as I'm most
familiar with this software).

I think the problem with patterns is that often people do know them but
don't know when to apply which.

Patterns
--------

The patterns can be structured in roughly three different categories.
Please click on the
`:notebook: <http://en.wikipedia.org/wiki/Software_design_pattern>`__
for a full explanation of the pattern on Wikipedia.

`Creational <Creational>`__
~~~~~~~~~~~~~~~~~~~~~~~~~~~

-  `AbstractFactory <Creational/AbstractFactory>`__
   `:notebook: <http://en.wikipedia.org/wiki/Abstract_factory_pattern>`__
-  `Builder <Creational/Builder>`__
   `:notebook: <http://en.wikipedia.org/wiki/Builder_pattern>`__
-  `FactoryMethod <Creational/FactoryMethod>`__
   `:notebook: <http://en.wikipedia.org/wiki/Factory_method_pattern>`__
-  `Multiton <Creational/Multiton>`__ (is considered an anti-pattern!
   :no\_entry:)
-  `Pool <Creational/Pool>`__
   `:notebook: <http://en.wikipedia.org/wiki/Object_pool_pattern>`__
-  `Prototype <Creational/Prototype>`__
   `:notebook: <http://en.wikipedia.org/wiki/Prototype_pattern>`__
-  `SimpleFactory <Creational/SimpleFactory>`__
-  `Singleton <Creational/Singleton>`__
   `:notebook: <http://en.wikipedia.org/wiki/Singleton_pattern>`__ (is
   considered an anti-pattern! :no\_entry:)
-  `StaticFactory <Creational/StaticFactory>`__

`Structural <Structural>`__
~~~~~~~~~~~~~~~~~~~~~~~~~~~

-  `Adapter <Structural/Adapter>`__
   `:notebook: <http://en.wikipedia.org/wiki/Adapter_pattern>`__
-  `Bridge <Structural/Bridge>`__
   `:notebook: <http://en.wikipedia.org/wiki/Bridge_pattern>`__
-  `Composite <Structural/Composite>`__
   `:notebook: <http://en.wikipedia.org/wiki/Composite_pattern>`__
-  `DataMapper <Structural/DataMapper>`__
   `:notebook: <http://en.wikipedia.org/wiki/Data_mapper_pattern>`__
-  `Decorator <Structural/Decorator>`__
   `:notebook: <http://en.wikipedia.org/wiki/Decorator_pattern>`__
-  `DependencyInjection <Structural/DependencyInjection>`__
   `:notebook: <http://en.wikipedia.org/wiki/Dependency_injection>`__
-  `Facade <Structural/Facade>`__
   `:notebook: <http://en.wikipedia.org/wiki/Facade_pattern>`__
-  `FluentInterface <Structural/FluentInterface>`__
   `:notebook: <http://en.wikipedia.org/wiki/Fluent_interface>`__
-  `Proxy <Structural/Proxy>`__
   `:notebook: <http://en.wikipedia.org/wiki/Proxy_pattern>`__
-  `Registry <Structural/Registry>`__
   `:notebook: <http://en.wikipedia.org/wiki/Service_locator_pattern>`__

`Behavioral <Behavioral>`__
~~~~~~~~~~~~~~~~~~~~~~~~~~~

-  `ChainOfResponsibilities <Behavioral/ChainOfResponsibilities>`__
   `:notebook: <http://en.wikipedia.org/wiki/Chain_of_responsibility_pattern>`__
-  `Command <Behavioral/Command>`__
   `:notebook: <http://en.wikipedia.org/wiki/Command_pattern>`__
-  `Iterator <Behavioral/Iterator>`__
   `:notebook: <http://en.wikipedia.org/wiki/Iterator_pattern>`__
-  `Mediator <Behavioral/Mediator>`__
   `:notebook: <http://en.wikipedia.org/wiki/Mediator_pattern>`__
-  `Memento <Behavioral/Memento>`__
   `:notebook: <http://en.wikipedia.org/wiki/Memento_pattern>`__
-  `NullObject <Behavioral/NullObject>`__
   `:notebook: <http://en.wikipedia.org/wiki/Null_Object_pattern>`__
-  `Observer <Behavioral/Observer>`__
   `:notebook: <http://en.wikipedia.org/wiki/Observer_pattern>`__
-  `Specification <Behavioral/Specification>`__
   `:notebook: <http://en.wikipedia.org/wiki/Specification_pattern>`__
-  `State <Behavioral/State>`__
   `:notebook: <http://en.wikipedia.org/wiki/State_pattern>`__
-  `Strategy <Behavioral/Strategy>`__
   `:notebook: <http://en.wikipedia.org/wiki/Strategy_pattern>`__
-  `TemplateMethod <Behavioral/TemplateMethod>`__
   `:notebook: <http://en.wikipedia.org/wiki/Template_method_pattern>`__
-  `Visitor <Behavioral/Visitor>`__
   `:notebook: <http://en.wikipedia.org/wiki/Visitor_pattern>`__

`More <More>`__
~~~~~~~~~~~~~~~

-  `Delegation <More/Delegation>`__
   `:notebook: <http://en.wikipedia.org/wiki/Delegation_pattern>`__
-  `ServiceLocator <More/ServiceLocator>`__
   `:notebook: <http://en.wikipedia.org/wiki/Service_locator_pattern>`__
-  `Repository <More/Repository>`__

Contribute
----------

Please feel free to fork and extend existing or add your own examples
and send a pull request with your changes! To establish a consistent
code quality, please check your code using
`PHP\_CodeSniffer <https://github.com/squizlabs/PHP_CodeSniffer>`__
against `PSR2
standard <https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md>`__
using ``./vendor/bin/phpcs -p --standard=PSR2 --ignore=vendor .``.

License
-------

(The MIT License)

Copyright (c) 2014 Dominik Liebler and
`contributors <https://github.com/domnikl/DesignPatternsPHP/graphs/contributors>`__

Permission is hereby granted, free of charge, to any person obtaining a
copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be included
in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS
OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

.. |Build Status| image:: https://travis-ci.org/domnikl/DesignPatternsPHP.png?branch=master
   :target: https://travis-ci.org/domnikl/DesignPatternsPHP

Code
----

You can also find these code on `GitHub`_

Test
----

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/
