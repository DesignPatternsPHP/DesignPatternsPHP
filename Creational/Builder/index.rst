Builder
=======

Purpose
-------

Builder is an interface that build parts of a complex object.

Sometimes, if the builder has a better knowledge of what it builds, this
interface could be an abstract class with default methods (aka adapter).

If you have a complex inheritance tree for objects, it is logical to
have a complex inheritance tree for builders too.

Note: Builders have often a fluent interface, see the mock builder of
PHPUnit for example.

Examples
--------

-  PHPUnit: Mock Builder

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt Builder UML Diagram
   :align: center

Code
----

You can also find these code on `GitHub`_

BuilderInterface.php

.. literalinclude:: BuilderInterface.php
   :language: php
   :linenos:

CarBuilder.php

.. literalinclude:: CarBuilder.php
   :language: php
   :linenos:

Director.php

.. literalinclude:: Director.php
   :language: php
   :linenos:

BikeBuilder.php

.. literalinclude:: BikeBuilder.php
   :language: php
   :linenos:

Test
----

Tests/DirectorTest.php

.. literalinclude:: Tests/DirectorTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/Builder
