`Dependency Injection`__
========================

Purpose
-------

To implement a loosely coupled architecture in order to get better
testable, maintainable and extendable code.

Usage
-----

Configuration gets injected and ``Connection`` will get all that it
needs from ``$config``. Without DI, the configuration would be created
directly in ``Connection``, which is not very good for testing and
extending ``Connection``.

Notice we are following Inversion of control principle in ``Connection``
by asking ``$config`` to implement ``Parameters`` interface. This
decouples our components. We don't care where the source of information
comes from, we only care that ``$config`` has certain methods to
retrieve that information. Read more about Inversion of control
`here <http://en.wikipedia.org/wiki/Inversion_of_control>`__.

Examples
--------

-  The Doctrine2 ORM uses dependency injection e.g. for configuration
   that is injected into a ``Connection`` object. For testing purposes,
   one can easily create a mock object of the configuration and inject
   that into the ``Connection`` object
-  Symfony and Zend Framework 2 already have containers for DI that
   create objects via a configuration array and inject them where needed
   (i.e. in Controllers)

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt DependencyInjection UML Diagram
   :align: center

Code
----

You can also find these code on `GitHub`_

AbstractConfig.php

.. literalinclude:: AbstractConfig.php
   :language: php
   :linenos:

Parameters.php

.. literalinclude:: Parameters.php
   :language: php
   :linenos:

ArrayConfig.php

.. literalinclude:: ArrayConfig.php
   :language: php
   :linenos:

Connection.php

.. literalinclude:: Connection.php
   :language: php
   :linenos:

Test
----

Tests/DependencyInjectionTest.php

.. literalinclude:: Tests/DependencyInjectionTest.php
   :language: php
   :linenos:

Tests/config.php

.. literalinclude:: Tests/config.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Structural/DependencyInjection
.. __: http://en.wikipedia.org/wiki/Dependency_injection
