<?php

namespace DesignPatterns\Decorator;

class RenderInXml extends Decorator
{
    public function renderData()
    {
        $output = $this->_wrapped->renderData();
        // do some fany conversion to xml from array ...
        $doc = new \DOMDocument();
        foreach ($output as $key => $val) {
            $doc->appendChild($doc->createElement('foo', 'bar'));
        }
        
        return $doc->saveXML();
    }
}
