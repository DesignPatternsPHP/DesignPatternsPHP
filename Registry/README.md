# Registry

## Purpose

To implement a central storage for objects often used throughout the application, is typically implemented using
an abstract class with only static methods (or using the Singleton pattern)

## Examples

* Zend Framework: `Zend_Registry` holds the application's logger object, front controller etc.
* Yii Framework: `CWebApplication` holds all the application components, such as `CWebUser`, `CUrlManager`, etc.
