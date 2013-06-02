<?php

namespace DesignPatterns;

/**
 * Decorator pattern
 *
 * Purpose:
 * to dynamically add new functionality to class instances
 *
 * Examples:
 * - Zend Framework: decorators for Zend_Form_Element instances
 * - Web Service Layer: Decorators JSON and XML for a REST service (in this case, only one of these should be allowed of
 *   course)
 *
 */
 
interface Renderer
{
    public function renderData();
}

class Webservice implements Renderer
{
    protected $_data;

    public function __construct($data)
    {
        $this->_data = $data;
    }

    public function renderData()
    {
        return $this->_data;
    }
}

abstract class Decorator
{
    protected $_wrapped;
    
    public function __construct($wrappable)
    {
        $this->_wrapped = $wrappable;
    }
}

class RenderInJson extends Decorator implements Renderer
{
    public function renderData()
    {
        $output = $this->_wrapped->renderData();
        return json_encode($output);
    }
}

class RenderInXml extends Decorator implements Renderer
{
    public function renderData()
    {
        $output = $this->_wrapped->renderData();
        // do some fancy conversion to xml from array ...
        return simplexml_load_string($output);
    }
}

// Create a normal service
$service = new Webservice(array('foo' => 'bar'));

// Wrap service with a JSON decorator for renderers
$service = new RenderInJson($service);
// Our Renderer will now output JSON instead of an array

echo $service->renderData();
