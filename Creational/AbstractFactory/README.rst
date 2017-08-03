`Abstract Factory`__
====================

Purpose
-------

To create series of related or dependent objects without specifying
their concrete classes. Usually the created classes all implement the
same interface. The client of the abstract factory does not care about
how these objects are created, he just knows how they go together.

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt AbstractFactory UML Diagram
   :align: center

Code
----

You can also find this code on `GitHub`_

AbstractFactory.php

.. literalinclude:: AbstractFactory.php
   :language: php
   :linenos:

JsonFactory.php

.. literalinclude:: JsonFactory.php
   :language: php
   :linenos:

HtmlFactory.php

.. literalinclude:: HtmlFactory.php
   :language: php
   :linenos:

Text.php

.. literalinclude:: Text.php
   :language: php
   :linenos:

JsonText.php

.. literalinclude:: JsonText.php
   :language: php
   :linenos:

HtmlText.php

.. literalinclude:: HtmlText.php
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
