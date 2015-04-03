Proxy |Wikipedia|_
==================

Purpose
-------

To interface to anything that is expensive or impossible to duplicate.

Examples
--------

-  Doctrine2 uses proxies to implement framework magic (e.g. lazy
   initialization) in them, while the user still works with his own
   entity classes and will never use nor touch the proxies

UML Diagram
-----------

.. image:: uml/uml.png
   :alt: Alt Proxy UML Diagram
   :align: center

Code
----

You can also find these code on `GitHub`_

RecordProxy.php

.. literalinclude:: RecordProxy.php
   :language: php
   :linenos:

Record.php

.. literalinclude:: Record.php
   :language: php
   :linenos:

Test
----

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Structural/Proxy
.. |Wikipedia| image:: /_static/Wikipedia-logo.png
   :height: 30 px
   :width: 30 px
.. _Wikipedia: http://en.wikipedia.org/wiki/Proxy_pattern