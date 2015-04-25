Simple Factory
==============

Purpose
-------

ConcreteFactory is a simple factory pattern.

It differs from the static factory because it is NOT static and as you
know: static => global => evil!

Therefore, you can have multiple factories, differently parametrized,
you can subclass it and you can mock-up it.

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt SimpleFactory UML Diagram
   :align: center

Code
----

You can also find these code on `GitHub`_

ConcreteFactory.php

.. literalinclude:: ConcreteFactory.php
   :language: php
   :linenos:

VehicleInterface.php

.. literalinclude:: VehicleInterface.php
   :language: php
   :linenos:

Bicycle.php

.. literalinclude:: Bicycle.php
   :language: php
   :linenos:

Scooter.php

.. literalinclude:: Scooter.php
   :language: php
   :linenos:

Test
----

Tests/SimpleFactoryTest.php

.. literalinclude:: Tests/SimpleFactoryTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/SimpleFactory
