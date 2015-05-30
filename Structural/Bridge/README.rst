`Bridge`__
==========

Purpose
-------

Decouple an abstraction from its implementation so that the two can vary
independently.

Sample:
^^^^^^^

-  `Symfony
   DoctrineBridge <https://github.com/symfony/DoctrineBridge>`__

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt Bridge UML Diagram
   :align: center

Code
----

You can also find these code on `GitHub`_

Workshop.php

.. literalinclude:: Workshop.php
   :language: php
   :linenos:

Assemble.php

.. literalinclude:: Assemble.php
   :language: php
   :linenos:

Produce.php

.. literalinclude:: Produce.php
   :language: php
   :linenos:

Vehicle.php

.. literalinclude:: Vehicle.php
   :language: php
   :linenos:

Motorcycle.php

.. literalinclude:: Motorcycle.php
   :language: php
   :linenos:

Car.php

.. literalinclude:: Car.php
   :language: php
   :linenos:

Test
----

Tests/BridgeTest.php

.. literalinclude:: Tests/BridgeTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Structural/Bridge
.. __: http://en.wikipedia.org/wiki/Bridge_pattern
