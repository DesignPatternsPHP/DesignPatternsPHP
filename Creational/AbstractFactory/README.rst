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

WriterFactory.php

.. literalinclude:: WriterFactory.php
   :language: php
   :linenos:

CsvWriter.php

.. literalinclude:: CsvWriter.php
   :language: php
   :linenos:

JsonWriter.php

.. literalinclude:: JsonWriter.php
   :language: php
   :linenos:

UnixCsvWriter.php

.. literalinclude:: UnixCsvWriter.php
   :language: php
   :linenos:

UnixJsonWriter.php

.. literalinclude:: UnixJsonWriter.php
   :language: php
   :linenos:

UnixWriterFactory.php

.. literalinclude:: UnixWriterFactory.php
   :language: php
   :linenos:

WinCsvWriter.php

.. literalinclude:: WinCsvWriter.php
   :language: php
   :linenos:

WinJsonWriter.php

.. literalinclude:: WinJsonWriter.php
   :language: php
   :linenos:

WinWriterFactory.php

.. literalinclude:: WinWriterFactory.php
   :language: php
   :linenos:

Test
----

Tests/AbstractFactoryTest.php

.. literalinclude:: Tests/AbstractFactoryTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/DesignPatternsPHP/DesignPatternsPHP/tree/main/Creational/AbstractFactory
.. __: http://en.wikipedia.org/wiki/Abstract_factory_pattern
