`Adapter / Wrapper`__
=====================

Purpose
-------

To translate one interface for a class into a compatible interface. An
adapter allows classes to work together that normally could not because
of incompatible interfaces by providing its interface to clients while
using the original interface.

Examples
--------

-  DB Client libraries adapter
-  using multiple different webservices and adapters normalize data so
   that the outcome is the same for all

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt Adapter UML Diagram
   :align: center

Code
----

You can also find this code on `GitHub`_

Book.php

.. literalinclude:: Book.php
   :language: php
   :linenos:

PaperBook.php

.. literalinclude:: PaperBook.php
   :language: php
   :linenos:

EBook.php

.. literalinclude:: EBook.php
   :language: php
   :linenos:

EBookAdapter.php

.. literalinclude:: EBookAdapter.php
   :language: php
   :linenos:

Kindle.php

.. literalinclude:: Kindle.php
   :language: php
   :linenos:

Test
----

Tests/AdapterTest.php

.. literalinclude:: Tests/AdapterTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/DesignPatternsPHP/DesignPatternsPHP/tree/main/Structural/Adapter
.. __: http://en.wikipedia.org/wiki/Adapter_pattern
