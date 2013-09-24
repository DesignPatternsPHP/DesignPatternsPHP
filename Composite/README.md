# Composite

# Purpose

To treat a group of objects the same way as a single instance of the object.

# Examples

* a form class instance handles all its form elements like a single instance of the form, when `render()` is called, it
  subsequently runs trough all its child elements and calls `render()` on them
* `Zend_Config`: a tree of configuration options, each one is a `Zend_Config` object itself

