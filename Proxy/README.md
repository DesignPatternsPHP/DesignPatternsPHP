# Proxy

## Purpose

To interface to anything that is expensive or impossible to duplicate.

## Examples

* Doctrine2 uses proxies to implement framework magic (e.g. lazy initialization) in them, while the user still works with his own entity classes and will never use nor touch the proxies
