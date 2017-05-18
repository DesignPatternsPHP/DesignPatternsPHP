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

ContextOrder.php

.. literalinclude:: ContextOrder.php
   :language: php
   :linenos:

StateOrder.php

.. literalinclude:: StateOrder.php
   :language: php
   :linenos:

ShippingOrder.php

.. literalinclude:: ShippingOrder.php
   :language: php
   :linenos:

CreateOrder.php

.. literalinclude:: CreateOrder.php
   :language: php
   :linenos:

Test
----

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Behavioral/State
.. __: http://en.wikipedia.org/wiki/State_pattern