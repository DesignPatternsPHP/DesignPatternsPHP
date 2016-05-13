<?php

namespace DesignPatterns\Structural\Decorator;

/**
 * Class RenderInXml.
 */
class RenderInXml extends Decorator
{
    /**
     * render data as XML.
     *
     * @return string
     */
    public function renderData()
    {
        // do some fancy conversion to xml from array ...

        $doc = new \DOMDocument();

        foreach ($this->wrapped->renderData() as $key => $val) {
            $doc->appendChild($doc->createElement($key, $val));
        }

        return $doc->saveXML();
    }
}
