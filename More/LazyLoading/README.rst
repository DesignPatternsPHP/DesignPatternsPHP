`Lazy Loading`__
================================

Purpose
-------

Lazy loading is a design pattern commonly used in computer programming to defer
initialization of an object until the point at which it is needed. It can contribute
to efficiency in the program's operation if properly and appropriately used

Code
----

You can also find this code on `GitHub`_

Heavy.php

.. literalinclude:: Heavy.php
    :language: php
    :linenos:

Holder.php

.. literalinclude:: Holder.php
    :language: php
    :linenos:


CallCounter.php

.. literalinclude:: CallCounter.php
    :language: php
    :linenos:

Test
----

Tests/HolderTest.php

.. literalinclude:: Tests/HolderTest.php
    :language: php
    :linenos:

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/More/LazyLoading
.. __: https://en.wikipedia.org/wiki/Lazy_loading
