`State`__
=========

Purpose
-------

Encapsulate varying behavior for the same routine based on an object's
state. This can be a cleaner way for an object to change its behavior at
runtime without resorting to large monolithic conditional statements.

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt State UML Diagram
   :align: center

Code
----

You can also find this code on `GitHub`_

OrderContext.php

.. literalinclude:: OrderContext.php
   :language: php
   :linenos:

State.php

.. literalinclude:: State.php
   :language: php
   :linenos:

StateCreated.php

.. literalinclude:: StateCreated.php
   :language: php
   :linenos:

StateShipped.php

.. literalinclude:: StateShipped.php
   :language: php
   :linenos:

StateDone.php

.. literalinclude:: StateDone.php
   :language: php
   :linenos:

Test
----

Tests/StateTest.php

.. literalinclude:: Tests/StateTest.php
   :language: php
   :linenos:


.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Behavioral/State
.. __: http://en.wikipedia.org/wiki/State_pattern