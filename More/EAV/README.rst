`Entity-Attribute-Value (EAV)`__
================================

The Entity–attribute–value (EAV) pattern in order to implement EAV model with PHP.

Purpose
-------

The Entity–attribute–value (EAV) model is a data model to describe entities
where the number of attributes (properties, parameters) that can be used
to describe them is potentially vast, but the number that will actually apply
to a given entity is relatively modest.

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: EAV UML Diagram
   :align: center

Code
----

You can also find this code on `GitHub`_

Entity.php

.. literalinclude:: Entity.php
    :language: php
    :linenos:

Attribute.php

.. literalinclude:: Attribute.php
   :language: php
   :linenos:

Value.php

.. literalinclude:: Value.php
    :language: php
    :linenos:

Test
----

Tests/EAVTest.php

.. literalinclude:: Tests/EAVTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/More/EAV
.. __: https://en.wikipedia.org/wiki/Entity–attribute–value_model
