<?php

namespace DesignPatterns\Structural\Decorator;

class XmlRenderer extends RendererDecorator
{
    /**
     * @return string
     */
    public function renderData(): string
    {
        $doc = new \DOMDocument();
        $data = $this->wrapped->renderData();
        $doc->appendChild($doc->createElement('content', $data));

        return $doc->saveXML();
    }
}
