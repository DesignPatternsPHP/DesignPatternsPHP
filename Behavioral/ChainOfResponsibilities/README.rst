`Chain Of Responsibilities`__
=============================

Purpose
--------

To build a chain of objects to handle a call in sequential order. If one
object cannot handle a call, it delegates the call to the next in the
chain and so forth.

Examples
---------

-  logging framework, where each chain element decides autonomously what
   to do with a log message
-  a Spam filter
-  Caching: first object is an instance of e.g. a Memcached Interface,
   if that "misses" it delegates the call to the database interface

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt ChainOfResponsibility UML Diagram
   :align: center

Code
----

You can also find this code on `GitHub`_

Handler.php

.. literalinclude:: Handler.php
   :language: php
   :linenos:
   
Responsible/FastStorage.php

.. literalinclude:: Responsible/HttpInMemoryCacheHandler.php
   :language: php
   :linenos:

Responsible/SlowStorage.php

.. literalinclude:: Responsible/SlowDatabaseHandler.php
   :language: php
   :linenos:

Test
----

Tests/ChainTest.php

.. literalinclude:: Tests/ChainTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/main/Behavioral/ChainOfResponsibilities
.. __: http://en.wikipedia.org/wiki/Chain_of_responsibility_pattern