# Singleton

**THIS IS CONSIDERED TO BE AN ANTI-PATTERN! FOR BETTER TESTABILITY AND MAINTAINABILITY USE DEPENDENCY INJECTION!**

## Purpose

To have only one instance of this object in the application that will handle all calls.

## Examples

* DB Connector
* Logger (may also be a Multiton if there are many log files for several purposes)
* Lock file for the application (there is only one in the filesystem ...)

## Diagram

<img src="http://yuml.me/diagram/scruffy/class/[Singleton|-instance: Singleton|+getInstance(): Singleton;-__construct(): void;-__clone(): void;-__wakeup(): void]" >