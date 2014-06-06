# Data Mapper

## Purpose

A Data Mapper, is a Data Access Layer that performs bidirectional transfer of
data between a persistent data store (often a relational database) and an in
memory data representation (the domain layer). The goal of the pattern is to
keep the in memory representation and the persistent data store independent of
each other and the data mapper itself. The layer is composed of one or more
mappers (or Data Access Objects), performing the data transfer. Mapper
implementations vary in scope. Generic mappers will handle many different domain
entity types, dedicated mappers will handle one or a few.

The key point of this pattern is, unlike Active Record pattern, the data model follows Single Responsibility Principle.

## Examples

* DB Object Relational Mapper (ORM) : Doctrine2 uses DAO named as "EntityRepository"
