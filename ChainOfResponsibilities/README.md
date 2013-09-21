# chain of responsibilities

## Purpose:

To build a chain of objects to handle a call. if one object cannot handle a call, it delegates the call to the next
in the chain and so forth

## Examples:

*  logging framework
*  spam filter
  Caching: first object is an instance of e.g. a Memcached Interface, if that "misses" it delegates the call to the database interface
*  Yii Framework: CFilterChain is a chain of controller action filters. the executing point is passed from one filter to the next along the chain, and only if all filters say "yes", the action can be invoked at last.