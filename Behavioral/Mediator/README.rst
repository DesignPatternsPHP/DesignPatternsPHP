`Mediator`__
============

Purpose
-------

This pattern provides an easy way to decouple many components working
together. It is a good alternative to Observer IF you have a "central
intelligence", like a controller (but not in the sense of the MVC).

All components (called Colleague) are only coupled to the
Mediator interface and it is a good thing because in OOP, one good friend
is better than many. This is the key-feature of this pattern.

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt Mediator UML Diagram
   :align: center

Code
----

You can also find this code on `GitHub`_

Mediator.php

.. literalinclude:: Mediator.php
   :language: php
   :linenos:

Colleague.php

.. literalinclude:: Colleague.php
   :language: php
   :linenos:

Ui.php

.. literalinclude:: Ui.php
   :language: php
   :linenos:

UserRepository.php

.. literalinclude:: UserRepository.php
   :language: php
   :linenos:

UserRepositoryUiMediator.php

.. literalinclude:: UserRepositoryUiMediator.php
   :language: php
   :linenos:

Test
----

Tests/MediatorTest.php

.. literalinclude:: Tests/MediatorTest.php
   :language: php
   :linenos:

.. _`GitHub`: https://github.com/DesignPatternsPHP/DesignPatternsPHP/tree/main/Behavioral/Mediator
.. __: http://en.wikipedia.org/wiki/Mediator_pattern
