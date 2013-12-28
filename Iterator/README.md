# Iterator

## Purpose

To make an object iterable and to make it appear like a collection of objects.

## Examples

* to process a file line by line by just running over all lines (which have an object representation) for a file (which of course is an object, too)

## Note

Standard PHP Library (SPL) defines an interface Iterator which is best suited for this! Often you would want to implement the Countable interface too, to allow `count($object)` on your iterable object
