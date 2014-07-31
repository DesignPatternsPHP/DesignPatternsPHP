# Repository

## Purpose

Mediates between the domain and data mapping layers using a collection-like interface for accessing domain objects.
Repository encapsulates the set of objects persisted in a data store and the operations performed over them, providing a more object-oriented view of the persistence layer.
Repository also supports the objective of achieving a clean separation and one-way dependency between the domain and data mapping layers.

## Examples

* Doctrine 2 ORM: there is Repository that mediates between Entity and DBAL and contains methods to retrieve objects
* Laravel Framework

## UML Diagram

![Alt Repository UML Diagram](uml/uml.png)