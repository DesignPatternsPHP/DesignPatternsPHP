`Specification`__
=================

Purpose
-------

Builds a clear specification of business rules, where objects can be
checked against. The composite specification class has one method called
``isSatisfiedBy`` that returns either true or false depending on whether
the given object satisfies the specification.


UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt Specification UML Diagram
   :align: center

Code
----

You can also find this code on `GitHub`_

Item.php

.. literalinclude:: Item.php
   :language: php
   :linenos:

Specification.php

.. literalinclude:: Specification.php
   :language: php
   :linenos:

OrSpecification.php

.. literalinclude:: OrSpecification.php
   :language: php
   :linenos:

PriceSpecification.php

.. literalinclude:: PriceSpecification.php
   :language: php
   :linenos:

AndSpecification.php

.. literalinclude:: AndSpecification.php
   :language: php
   :linenos:

NotSpecification.php

.. literalinclude:: NotSpecification.php
   :language: php
   :linenos:

Test
----

Tests/SpecificationTest.php

.. literalinclude:: Tests/SpecificationTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/DesignPatternsPHP/DesignPatternsPHP/tree/main/Behavioral/Specification
.. __: http://en.wikipedia.org/wiki/Specification_pattern
