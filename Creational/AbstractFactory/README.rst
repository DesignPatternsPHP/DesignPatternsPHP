`Abstract Factory`__
====================

Purpose
-------

To create series of related or dependent objects without specifying
their concrete classes. Usually the created classes all implement the
same interface. The client of the abstract factory does not care about
how these objects are created, it just knows how they go together.

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt AbstractFactory UML Diagram
   :align: center

Code
----

You can also find this code on `GitHub`_

Product.php

.. literalinclude:: Product.php
   :language: php
   :linenos:

ShippableProduct.php

.. literalinclude:: ShippableProduct.php
   :language: php
   :linenos:

DigitalProduct.php

.. literalinclude:: DigitalProduct.php
   :language: php
   :linenos:

ProductFactory.php

.. literalinclude:: ProductFactory.php
   :language: php
   :linenos:

Test
----

Tests/AbstractFactoryTest.php

.. literalinclude:: Tests/AbstractFactoryTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Creational/AbstractFactory
.. __: http://en.wikipedia.org/wiki/Abstract_factory_pattern
