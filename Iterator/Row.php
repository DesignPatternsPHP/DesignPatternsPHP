<?php

namespace DesignPatterns\Iterator;

/**
 * Class Row
 */
class Row
{
    protected $data;

    /**
     * {@inheritdoc}
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * {@inheritdoc}
     */
    public function process()
    {
        // do some fancy things here ...
    }
}
