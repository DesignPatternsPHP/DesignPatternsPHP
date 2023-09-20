`Fluent Interface`__
====================

Purpose
-------

To write code that is easy readable just like sentences in a natural
language (like English).

Examples
--------

-  Doctrine2's QueryBuilder works something like that example class
   below
-  PHPUnit uses fluent interfaces to build mock objects

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt FluentInterface UML Diagram
   :align: center

Code
----

You can also find this code on `GitHub`_

Sql.php

.. literalinclude:: Sql.php
   :language: php
   :linenos:

Test
----

Tests/FluentInterfaceTest.php

.. literalinclude:: Tests/FluentInterfaceTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/DesignPatternsPHP/DesignPatternsPHP/tree/main/Structural/FluentInterface
.. __: http://en.wikipedia.org/wiki/Fluent_interface