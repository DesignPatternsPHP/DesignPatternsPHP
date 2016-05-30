`State Container`__
===============

Purpose
-------

A State Container is a class which contains the state of the app as a central repository. Other  This allows to build your application like stateless functions/components that send messages to the central repository and are easy to test. It also allows to do some data operations easier, like caching, data exportation.

This pattern have been popularized recently by the Redux JavaScript library and it is specially usefull for the presentation layer and to keep track of every user action in the application for analytics.   

Examples
--------

-  Wizard application with several steps: In client applications some objects can subscribe to the changes in the repository and update themselves according to them. In this example, as we are studing PHP implementations and server side code instead of subscribing to the changes we can simulate a two steps process, in the first step the server receive the action and modifies the state, in the second state the server returns the result acording to the new state.

- User actions tracking: stores all user actions as an unique stream. This allows for reproduction of the user interaction for testing purposes and also for analitycs of user behaviours, this stream-consumer.

UML Diagram
-----------

TODO

Code
----

You can also find these code on `GitHub`_

.. literalinclude:: StateContainer.php
   :language: php
   :linenos:

Test
----

.. literalinclude:: Tests/StateContainerTest.php
   :language: php
   :linenos: 

.. _`GitHub`: https://github.com/domnikl/DesignPatternsPHP/tree/master/Structural/StateContainer