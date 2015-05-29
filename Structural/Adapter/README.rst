`Adapter / Wrapper`__
=====================

Purpose
-------

To translate one interface for a class into a compatible interface. An
adapter allows classes to work together that normally could not because
of incompatible interfaces by providing it's interface to clients while
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

You can also find these code on `GitHub`_

PaperBookInterface.php

.. literalinclude:: PaperBookInterface.php
   :language: php
   :linenos:

Book.php

.. literalinclude:: Book.php
   :language: php
   :linenos:

EBookAdapter.php

.. literalinclude:: EBookAdapter.php
   :language: php
   :linenos:

EBookInterface.php

.. literalinclude:: EBookInterface.php
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

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Structural/Adapter
.. __: http://en.wikipedia.org/wiki/Adapter_pattern
