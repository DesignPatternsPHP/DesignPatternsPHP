`Decorator`__
=============

Purpose
-------

To dynamically add new functionality to class instances.

Examples
--------

-  Web Service Layer: Decorators JSON and XML for a REST service (in
   this case, only one of these should be allowed of course)

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt Decorator UML Diagram
   :align: center

Code
----

You can also find this code on `GitHub`_

Booking.php

.. literalinclude:: Booking.php
   :language: php
   :linenos:

BookingDecorator.php

.. literalinclude:: BookingDecorator.php
   :language: php
   :linenos:

DoubleRoomBooking.php

.. literalinclude:: DoubleRoomBooking.php
   :language: php
   :linenos:

ExtraBed.php

.. literalinclude:: ExtraBed.php
   :language: php
   :linenos:

WiFi.php

.. literalinclude:: WiFi.php
   :language: php
   :linenos:

Test
----

Tests/DecoratorTest.php

.. literalinclude:: Tests/DecoratorTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/DesignPatternsPHP/DesignPatternsPHP/tree/main/Structural/Decorator
.. __: http://en.wikipedia.org/wiki/Decorator_pattern
