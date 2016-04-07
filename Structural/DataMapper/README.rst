`Data Mapper`__
===============

Purpose
-------

A Data Mapper, is a Data Access Layer that performs bidirectional
transfer of data between a persistent data store (often a relational
database) and an in memory data representation (the domain layer). The
goal of the pattern is to keep the in memory representation and the
persistent data store independent of each other and the data mapper
itself. The layer is composed of one or more mappers (or Data Access
Objects), performing the data transfer. Mapper implementations vary in
scope. Generic mappers will handle many different domain entity types,
dedicated mappers will handle one or a few.

The key point of this pattern is, unlike Active Record pattern, the data
model follows Single Responsibility Principle.

Examples
--------

-  DB Object Relational Mapper (ORM) : Doctrine2 uses DAO named as
   "EntityRepository"

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt DataMapper UML Diagram
   :align: center

Code
----

You can also find these code on `GitHub`_

User.php

.. literalinclude:: User.php
   :language: php
   :linenos:

UserMapper.php

.. literalinclude:: UserMapper.php
   :language: php
   :linenos:

Test
----

Tests/DataMapperTest.php

.. literalinclude:: Tests/DataMapperTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Structural/DataMapper
.. __: http://en.wikipedia.org/wiki/Data_mapper_pattern
