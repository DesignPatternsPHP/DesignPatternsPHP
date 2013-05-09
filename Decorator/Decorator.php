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
class Webservice
{
    protected $_data;

    /**
     * an array to hold all added decorators, often there would be defaults set in this
     * array, e.g. the service could be defaulted to use JSON and only for special APIs
     * use XML
     *
     * @var array
     */
    protected $_decorators = array();

    public function __construct($data)
    {
        $this->_data = $data;
    }

    /**
     * 
     *
     * @param WebserviceDecorator $decorator
     * @return void
     */
    public function addDecorator(WebserviceDecorator $decorator)
    {
        $this->_decorators[] = $decorator;
    }

    /**
     * @return string
     */
    public function renderData()
    {
        $response = '';
        foreach ($this->_decorators as $decorator) {
            $response = $decorator->renderData($this->_data);
        }

        return $response;
    }
}

interface WebserviceDecorator
{
    public function renderData($data);
}

class JsonDecorator implements WebserviceDecorator
{
    public function renderData($data)
    {
        return json_encode($data);
    }
}

class XmlDecorator implements WebserviceDecorator
{
    public function renderData($data)
    {
        // do some fancy conversion to xml from array ...
        return simplexml_load_string($data);
    }
}

$service = new Webservice(array('foo' => 'bar'));
$service->addDecorator(new JsonDecorator());
echo $service->renderData();
