.. DesignPatternsPHP

=================
DesignPatternsPHP
=================

.. image:: https://travis-ci.org/domnikl/DesignPatternsPHP.svg?branch=master
   :target: https://travis-ci.org/domnikl/DesignPatternsPHP
   :alt: Build Status

.. image:: https://readthedocs.org/projects/designpatternsphp/badge/?version=latest
   :target: https://readthedocs.org/projects/designpatternsphp/?badge=latest
   :alt: Documentation Status

.. image:: https://img.shields.io/badge/donate-paypal-blue.svg?style=flat-square
   :target: https://paypal.me/DominikLiebler
   :alt: Donate

This is a collection of known `design patterns`_ and some sample code how
to implement them in PHP. Every pattern has a small list of examples
(most of them from Zend Framework, Symfony2 or Doctrine2 as I'm most
familiar with this software).

I think the problem with patterns is that often people do know them but
don't know when to apply which.

Patterns
--------

The patterns can be structured in roughly three different categories.
Please click on **the title of every pattern's page** for a full explanation of the pattern on Wikipedia.

.. toctree::
   :titlesonly:
   :numbered:

   Creational/README
   Structural/README
   Behavioral/README
   More/README

Contribute
----------

If you encounter any bugs or missing translations, please feel free
to fork and send a pull request with your changes.
To establish a consistent code quality, please check your code using
`PHP CodeSniffer`_ against `PSR2 standard`_
using ``./vendor/bin/phpcs -p --standard=PSR2 --ignore=vendor .``.

.. _`design patterns`: http://en.wikipedia.org/wiki/Software_design_pattern
.. _`PHP CodeSniffer`: https://github.com/squizlabs/PHP_CodeSniffer
.. _`PSR2 standard`: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md
