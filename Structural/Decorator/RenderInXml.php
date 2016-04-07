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
     * @return mixed|string
     */
    public function renderData()
    {
        $output = $this->wrapped->renderData();

        // do some fancy conversion to xml from array ...

        $doc = new \DOMDocument();

        foreach ($output as $key => $val) {
            $doc->appendChild($doc->createElement($key, $val));
        }

        return $doc->saveXML();
    }
}
