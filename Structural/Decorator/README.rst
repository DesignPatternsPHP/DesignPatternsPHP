`Decorator`__
=============

Purpose
-------

To dynamically add new functionality to class instances.

Examples
--------

-  Zend Framework: decorators for ``Zend_Form_Element`` instances
-  Web Service Layer: Decorators JSON and XML for a REST service (in
   this case, only one of these should be allowed of course)

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt Decorator UML Diagram
   :align: center

Code
----

You can also find these code on `GitHub`_

RendererInterface.php

.. literalinclude:: RendererInterface.php
   :language: php
   :linenos:

Webservice.php

.. literalinclude:: Webservice.php
   :language: php
   :linenos:

Decorator.php

.. literalinclude:: Decorator.php
   :language: php
   :linenos:

RenderInXml.php

.. literalinclude:: RenderInXml.php
   :language: php
   :linenos:

RenderInJson.php

.. literalinclude:: RenderInJson.php
   :language: php
   :linenos:

Test
----

Tests/DecoratorTest.php

.. literalinclude:: Tests/DecoratorTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Structural/Decorator
.. __: http://en.wikipedia.org/wiki/Decorator_pattern
