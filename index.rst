.. DesignPatternsPHP

DesignPatternsPHP
=================

.. image:: https://readthedocs.org/projects/designpatterns-php/badge/?version=latest
   :target: https://readthedocs.org/projects/designpatterns-php/?badge=latest
   :alt: Documentation Status

This is a collection of known design patterns and some sample code how
to implement them in PHP. Every pattern has a small list of examples
(most of them from Zend Framework, Symfony2 or Doctrine2 as I'm most
familiar with this software).

I think the problem with patterns is that often people do know them but
don't know when to apply which.

Patterns
--------

The patterns can be structured in roughly three different categories.
Please click
`here <http://en.wikipedia.org/wiki/Software_design_pattern>`__
for a full explanation of the pattern on Wikipedia.

.. toctree::
   :titlesonly:
   :numbered:

   Creational/index
   Structural/index
   Behavioral/index
   More/index

Contribute
----------

Please feel free to fork and extend existing or add your own examples
and send a pull request with your changes! To establish a consistent
code quality, please check your code using
`PHP\_CodeSniffer <https://github.com/squizlabs/PHP_CodeSniffer>`__
against `PSR2
standard <https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md>`__
using ``./vendor/bin/phpcs -p --standard=PSR2 --ignore=vendor .``.

License
-------

(The MIT License)

Copyright (c) 2014 Dominik Liebler and
`contributors <https://github.com/domnikl/DesignPatternsPHP/graphs/contributors>`__

Permission is hereby granted, free of charge, to any person obtaining a
copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be included
in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS
OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
