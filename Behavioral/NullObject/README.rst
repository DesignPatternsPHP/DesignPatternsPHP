`Null Object`__
===============

Purpose
-------

NullObject is not a GoF design pattern but a schema which appears
frequently enough to be considered a pattern. It has the following
benefits:

-  Client code is simplified
-  Reduces the chance of null pointer exceptions
-  Fewer conditionals require less test cases

Methods that return an object or null should instead return an object or
``NullObject``. ``NullObject``\ s simplify boilerplate code such as
``if (!is_null($obj)) { $obj->callSomething(); }`` to just
``$obj->callSomething();`` by eliminating the conditional check in
client code.

Examples
--------

- Null logger or null output to preserve a standard way of interaction between objects, even if the shouldn't do anything
-  null handler in a Chain of Responsibilities pattern
-  null command in a Command pattern

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt NullObject UML Diagram
   :align: center

Code
----

You can also find this code on `GitHub`_

Service.php

.. literalinclude:: Service.php
   :language: php
   :linenos:

Logger.php

.. literalinclude:: Logger.php
   :language: php
   :linenos:

PrintLogger.php

.. literalinclude:: PrintLogger.php
   :language: php
   :linenos:

NullLogger.php

.. literalinclude:: NullLogger.php
   :language: php
   :linenos:

Test
----

Tests/LoggerTest.php

.. literalinclude:: Tests/LoggerTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/DesignPatternsPHP/DesignPatternsPHP/tree/main/Behavioral/NullObject
.. __: http://en.wikipedia.org/wiki/Null_Object_pattern
