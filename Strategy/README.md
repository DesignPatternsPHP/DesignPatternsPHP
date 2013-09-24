# Strategy

## Terminology:

* Context
* Strategy
* Concrete Strategy

## Purpose

To separate strategies and to enable fast switching between them. Also this pattern is a good alternative to inheritance (instead of having an abstract class that is extended).

## Examples

* sorting a list of objects, one strategy by date, the other by id
* simplify unit testing: e.g. switching between file and in-memory storage
