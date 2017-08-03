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

You can also find this code on `GitHub`_

RenderableInterface.php

.. literalinclude:: RenderableInterface.php
   :language: php
   :linenos:

Webservice.php

.. literalinclude:: Webservice.php
   :language: php
   :linenos:

RendererDecorator.php

.. literalinclude:: RendererDecorator.php
   :language: php
   :linenos:

XmlRenderer.php

.. literalinclude:: XmlRenderer.php
   :language: php
   :linenos:

JsonRenderer.php

.. literalinclude:: JsonRenderer.php
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
